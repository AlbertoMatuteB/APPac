@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center pt-28 py-10 px-16 sm:px-6 lg:px-8">
    <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
        <div class="flex flex-row justify-between">
            <div class="space-y-2">
                <h1 class="font-blue-appac text-left text-4xl font-black">Evaluación de
                    {{$evaluation->beneficiary->name}}</h1>
                <h3 class="font-blue-appac text-left text-2xl font-black">{{$evaluation->date}}</h3>
                <h3 class="font-blue-appac text-left text-2xl font-black">Evaluador:
                    {{$evaluation->evaluator->name . ' ' . $evaluation->evaluator->last_name}}</h3>
                <h3 class="font-blue-appac text-left text-2xl font-black">Observaciones:</h3>
                <p class="text-left text-lg font-black">{{$evaluation->observations}}</p>
            </div>
            <button type="button"
                class="self-start px-20 py-2 rounded-lg bg-blue-appac text-white text-center text-center inline-flex items-center hover:bg-gray-200">
                <svg class="w-5 h-5 mr-2 -ml-1"" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <a class="font-semibold text-white text-center" href="{{url('/evaluaciones/'.$evaluation->id.'/pdf')}}"
                    target="_blank">
                    Descargar
                </a>
            </button>
        </div>
        <button type="button" onclick="window.location.href='/evaluaciones';"
            class="px-20 mr-2  py-2 rounded-lg bg-default-grey text-gray text-center text-center inline-flex items-center hover:bg-gray-200">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <a class="font-semibold text-gray text-center" href="{{ url('/evaluaciones') }}">
                Regresar
            </a>
        </button>

        <form class="grid grid-rows-11 gap-y-2 items-center" method="post"
            action="/evaluaciones/{{$evaluation->id}}/submit">
            @csrf
            @include('Evaluation.form',['mode'=>'Consult', 'i' => 1])
        </form>


    </div>
</div>

@endsection
