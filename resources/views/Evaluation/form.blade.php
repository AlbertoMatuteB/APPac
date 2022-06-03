
<script src="{{ asset('chart.js/chart.js') }}">
</script>

  
<div @if ( $mode=='create' ) x-data="{ section: 1 }" @else  x-data="{ section: 0 }"  @endif >
    <ul class="flex flex-row justify-end">
        @if ( $mode=='Consult' )
        <li class=""  @click="section = 0">
            <a href="#" class="h-full w-full py-2 px-4 border-t-2 border-x-2 rounded-t-lg"
                :class="section ===0? 'bg-white' : 'bg-slate-200'">Resumen</a>
        </li>
        @endif
        @foreach ($areas as $area)
        <li class="" id="b{{$area->id}}" @click="section = {{$area->id}}">
            <a href="#" class="h-full w-full py-2 px-4 border-t-2 border-x-2 rounded-t-lg"
                :class="section ==={{$area->id}}? 'bg-white' : 'bg-slate-200'">{{$area->id}}</a>
        </li>
        @endforeach
    </ul>
    @if ( $mode=='Consult' )
    <div class="flex items-center justify-center my-20" x-show="section === 0" >
    <div  class="w-full" ><canvas id="mainChart"></canvas></div>
    </div>
    @endif
    @foreach ($areas as $area)

    <div x-show="section === {{$area->id}}">
        <h1 class="font-bold py-4">{{$area->name}}</h1>
        <table class="table-auto w-full">
            <thead class="">
                <tr class="bg-transparent">
                    <th class="text-left p-4 font-medium">
                        Actividad
                    </th>
                    <th class="text-center p-4 font-medium">
                        Lo logra
                    </th>
                    <th class="text-center p-4 font-medium">
                        En proceso
                    </th>
                    <th class="text-center p-4 font-medium">
                        No lo logra
                    </th>
                    <th class="text-left px-4 font-medium">
                        Comentario
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activities as $activity)
                @if($activity->area_id == $area->id)
                <tr class="border-y hover:bg-gray-50">
                    <td class="p-4 text-left">
                        {{$activity->name}}
                    </td>
                    <td class="p-4 text-center">
                        <input type="radio" name="{{$activity->id}}" value="3" @if ( $mode=='Consult' ) disabled @endif 
                            class="" @if ( $answers !=null) @foreach ($answers as $answer) @if ($answer->activity_id ==
                        $activity->id && $answer->answer == 3) checked @endif @endforeach @endif>
                    </td>
                    <td class="p-4 text-center">
                        <input type="radio" name="{{$activity->id}}" value="2" @if ( $mode=='Consult' ) disabled @endif
                            class="" @if ( $answers !=null) @foreach ($answers as $answer) @if ($answer->activity_id ==
                        $activity->id && $answer->answer == 2) checked @endif @endforeach @endif>
                    </td>
                    <td class="p-4 text-center">
                        <input type="radio" name="{{$activity->id}}" value="1" @if ( $mode=='Consult' ) disabled @endif
                            class="" @if ( $answers !=null) @foreach ($answers as $answer) @if ($answer->activity_id ==
                        $activity->id && $answer->answer == 1) checked  @endif @endforeach @endif>
                    </td>
                    <td class="px-4 h-full w-auto">
                        <textarea rows="2" wrap="hard" name="{{'comment-'.$activity->id}}"
                            class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full"
                            @if ( $mode=='Consult' ) disabled @endif>@if($mode=='Consult')@foreach($answers as $answer)@if($answer->activity_id==$activity->id){{$answer->comments}} @endif @endforeach @endif
                            </textarea>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        @if ( $mode=='Consult' )
        <div class="flex items-center justify-center my-20" >
    <div  class="w-full" ><canvas id="c{{$area->id}}"></canvas></div>
</div>

<script> 
    let yLabels{{$area->id}} = {
    1 : 'No lo logra', 2 : 'En proceso', 3 : 'Lo logra',
    }
    
    let ctx{{$area->id}}  = document.getElementById('c{{$area->id}}');
    let myChart{{$area->id}} = new Chart(ctx{{$area->id}}, {
    type: 'bar',
    data: {
        
        labels: [@foreach($answers as $answer) @if($answer -> activity -> area_id == $area->id  ) @if($answer -> answer > 1 || $answer -> comments != null) "{{$answer ->  activity -> name}}" ,@endif @endif @endforeach],
        datasets: [{
            label: 'Actividad',
            @php
            $index = $area->id
            @endphp
            
            data: [@foreach ($answers as $answer) @if ($answer -> activity -> area_id == $area->id ) @if($answer -> answer > 1 || $answer -> comments != null) {{$answer -> answer}}, @endif @endif @endforeach],
              
            backgroundColor: [
                
                '#0061AA',
                

            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                
            ],
            borderWidth: 0
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Resumen del Area'
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let label = context.dataset.label || '';

                        if (label) {
                            label += ': ';
                        }
                        if (context.parsed.y !== null) {
                            if(context.parsed.y === 3){
                                label += "Lo logra"; 
                            }
                            if(context.parsed.y === 2){
                                label += "En proceso"; 
                            }
                            if(context.parsed.y === 1){
                                label += "No lo logra"; 
                            }
                        }
                        return label;
                    }
                }
            }
            
        },
        scales: {
            yAxes: {
                beginAtZero: true,
            ticks: {
                callback: function(value, index, values) {
                    // for a value (tick) equals to 8
                    return yLabels{{$area->id}}[value];
                    // 'junior-dev' will be returned instead and displayed on your chart
                }
            }
        }
        }
    }

    
});
</script>
@endif
    </div>
    @endforeach
    @if ($mode != 'Consult')
    <div class="flex items-center justify-center items-center mt-8">
        <button class="rounded-lg bg-blue-appac py-2 px-32" type="submit">
            <a class="text-white text-center">Registrar Evaluación</a>
        </button>
    </div>
    @endif
</div>
@if ($mode == 'Consult')
<script> 
   

    let rLabels = { 0 : 'No lo logra',
    1 : 'No lo logra', 2 : 'En proceso', 3 : 'Lo logra',
    }
    
    let ctx0 = document.getElementById('mainChart');
    let myChart0 = new Chart(ctx0, {
    type: 'polarArea',
    data: {
        
        labels: [@foreach($answers as $answer) @if($answer -> answer > 1 || $answer -> comments != null) "{{$answer ->  activity -> name}}" , @endif  @endforeach],
        datasets: [{
            label: 'Actividad',
            
            data: [@foreach ($answers as $answer) @if($answer -> answer > 1 || $answer -> comments != null) {{$answer -> answer}}, @endif  @endforeach],
            
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(75, 192, 192)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)',
                'rgb(54, 162, 235)',
                'rgb(25, 25, 112)',
                'rgb(137, 207, 240)',
                'rgb(8, 143, 143)',
                'rgb(100, 149, 237)',
                'rgb(204, 204, 255)',
                'rgb(225, 193, 110)',
                'rgb(205, 127, 50)',
                'rgb(165, 42, 42)',
                'rgb(128, 128, 0)',
            ],
            borderColor: [
                'rgba(0, 0, 0, 1)',
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)',
                'rgb(54, 162, 235)'
                
            ],
            borderWidth: 2
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Resumen de progreso'
            },
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let label = context.label || '';

                        if (label) {
                            label += ': ';
                        }
                        if (context.parsed.r !== null) {
                            if(context.parsed.r === 3){
                                label += "Lo logra"; 
                            }
                            if(context.parsed.r === 2){
                                label += "En proceso"; 
                            }
                            if(context.parsed.r === 1){
                                label += "No lo logra"; 
                            }
                        }
                        return label;
                    }
                }
            }
            
        },
        scales: {
           
            rAxes: {
                beginAtZero: true,
                grid: {
                    lineWidth: 4,
                    color: 'black',
                    z: 1,
                },
                
            ticks: {
                callback: function(value, index, values) {
                    // for a value (tick) equals to 8
                    return rLabels[value];
                    // 'junior-dev' will be returned instead and displayed on your chart
                },
                z: 1,
                color: 'black',
            }
        }
        }
    }

    
});
</script>
@endif


