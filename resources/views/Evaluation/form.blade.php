
<script src="{{ asset('chart.js/chart.js') }}">
</script>

  
<div x-data="{ section: 1 }">
    <ul class="flex flex-row justify-end">
        @foreach ($areas as $area)
        <li class="" id="b{{$area->id}}" @click="section = {{$area->id}}">
            <a href="#" class="h-full w-full py-2 px-4 border-t-2 border-x-2 rounded-t-lg"
                :class="section ==={{$area->id}}? 'bg-white' : 'bg-slate-200'">{{$area->id}}</a>
        </li>
        @endforeach
    </ul>
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
                        $activity->id && $answer->answer == 1) checked @endif @endforeach @endif>
                    </td>
                    <td class="px-4 h-full w-auto">
                        <textarea rows="2" wrap="hard" name="{{'comment-'.$activity->id}}"
                            class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full"
                            @if ( $mode=='Consult' ) disabled @endif>@if ( $mode=='Consult' )@foreach($answers as $answer) @if ($answer->activity_id == $activity->id){{$answer->comments}}@endif @endforeach @endif
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
        
        labels: [@foreach($answers as $answer) @if($answer -> activity -> area_id == $area->id  ) "{{$answer ->  activity -> name}}" , @endif @endforeach],
        datasets: [{
            label: 'Gráfica de actividades',
            
            @php
            $index = $area->id
            @endphp
            
            data: [@foreach ($answers as $answer) @if ($answer -> activity -> area_id == $area->id ){{$answer -> answer}}, @endif @endforeach],
            
            
            
            
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


