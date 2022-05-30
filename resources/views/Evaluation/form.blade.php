<script src="{{ asset('chart.js/chart.js') }}"></script>
<canvas id="myChart" width="400" height="400"></canvas>
<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
 
<div x-data="{ section: 1 }">
    <ul class="flex flex-row justify-end">
        @foreach ($areas as $area)
        <li class="" @click="section = {{$area->id}}">
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
    </div>
    @endforeach
    @if ($mode != 'Consult')
    <div class="flex items-center justify-center items-center mt-8">
        <button class="rounded-lg bg-blue-appac py-2 px-32" type="submit">
            <a class="text-white text-center">Registrar Evaluacion</a>
        </button>
    </div>
    @endif
</div>