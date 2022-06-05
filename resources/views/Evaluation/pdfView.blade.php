<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View pdf</title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
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
        <div>aqui va el grafico</div>

        @foreach ($areas as $area)

        <div>
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
                            <input type="radio" name="{{$activity->id}}" value="3" disabled class="" @if ( $answers
                                !=null) @foreach ($answers as $answer) @if ($answer->activity_id ==
                            $activity->id && $answer->answer == 3) checked @endif @endforeach @endif>
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" name="{{$activity->id}}" value="2" disabled class="" @if ( $answers
                                !=null) @foreach ($answers as $answer) @if ($answer->activity_id ==
                            $activity->id && $answer->answer == 2) checked @endif @endforeach @endif>
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" name="{{$activity->id}}" value="1" disabled class="" @if ( $answers
                                !=null) @foreach ($answers as $answer) @if ($answer->activity_id ==
                            $activity->id && $answer->answer == 1) checked @endif @endforeach @endif>
                        </td>
                        <td class="px-4 h-full w-auto">
                            <textarea rows="2" wrap="hard" name="{{'comment-'.$activity->id}}"
                                class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full"
                                disabled>@foreach($answers as $answer)@if($answer->activity_id==$activity->id){{$answer->comments}} @endif @endforeach
                            </textarea>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        @endforeach
    </div>
</body>

</html>
