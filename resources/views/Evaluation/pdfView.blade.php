<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View pdf</title>
    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('chart.js/chart.js') }}"></script>
    {{-- Styles --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

</head>

<body>
    <div class="py-10 px-20 flex flex-col items-center justify-center w-full">
        <div class="flex flex-row justify-start items-center w-full pb-4 border-b-2 border-black">
            <img src="{{asset('img/logo_apac.jpeg')}}" class="w-40 relative" alt="Logo Apac">
            {{-- <h1 class="text-center w-full text-4xl  align-middle inline-block">Valora</h1> --}}
        </div>
        <h2 class="text-center w-full text-3xl my-10">Informe de Resultados</h2>
        <table class="text-left w-full border-collapse">
            <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
            <thead>
                <tr>
                    <th
                        class="py-4 px-6 bg-grey-lightest text-lg font-bold uppercase text-grey-dark border border-grey-light">
                        Información del alumno</th>
                    <th
                        class="py-4 px-6 bg-grey-lightest text-lg font-bold uppercase text-grey-dark border border-grey-light">
                        Información de la evaluacion</th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-grey-lighter  border-grey-light">
                    <td class="py-4 px-6 border">
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <span class="font-bold mr-2">Nombre:
                                </span><span>{{$evaluation->beneficiary->name}}</span>
                            </div>
                            <div class="flex flex-row">
                                <span class="font-bold mr-2">Fecha de nacimiento:
                                </span><span>{{$evaluation->beneficiary->birth_date}}</span>
                            </div>
                            <div class="flex flex-row">
                                <span class="font-bold mr-2">Diagnóstico: </span><span>
                                    @foreach ($evaluation->beneficiary->diagnostic as $key => $diagnostic)
                                    {{$diagnostic->name . ', '}}
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6 border">
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <span class="font-bold mr-2">Fecha de evaluación:
                                </span><span>{{$evaluation->date}}</span>
                            </div>
                            <div class="flex flex-row">
                                <span class="font-bold mr-2">Edad:
                                </span><span>{{$evaluation->beneficiary->age()}}</span>
                            </div>
                            <div class="flex flex-row">
                                <span class="font-bold mr-2">Centro:
                                </span><span>{{$evaluation->beneficiary->institution->name}}</span>
                            </div>
                            <div class="flex flex-row">
                                <span
                                    class="font-bold mr-2">Evaluador:</span><span>{{$evaluation->evaluator->name . ' '. $evaluation->evaluator->last_name}}</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex items-center justify-center my-4 w-full">
            <div  class="w-3/5" ><canvas id="mainChart"></canvas></div>
        </div>

          
        @foreach ($filteredAnswers as $area)
        <div class="w-full my-4">
            <h1 class="font-bold py-4 text-xl">{{$area->name}}</h1>
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
                    @foreach ($area->answers as $answer)
                    <tr class="border-y hover:bg-gray-50">
                        <td class="p-4 text-left">
                            {{$answer->activity->name}}
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" name="{{$answer->activity_id}}" value="3" disabled @if ($answer->answer==3)
                                checked
                            @endif>
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" name="{{$answer->activity_id}}" value="2" disabled @if ($answer->answer==2)
                                checked
                            @endif>
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" name="{{$answer->activity_id}}" value="1" disabled @if ($answer->answer==1)
                                checked
                            @endif>
                        </td>
                        <td class="px-4 h-full w-auto">
                            <textarea rows="2" wrap="hard" name="{{'comment-'.$answer->activity_id}}"
                                class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full"
                                disabled>
                                {{$answer->comments}}
                            </textarea>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
    {{-- {{dd($filteredAnswers)}}       --}}
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
</body>

</html>
