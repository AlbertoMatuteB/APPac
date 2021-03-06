@extends('layouts.app')

@section('content')
<div x-data="{ isModalOpen: false, idEvaluation:0, 
    async cancelEvaluation(id) {
            try {
                const resp = await axios.post(
                    `/api/evaluaciones/${id}/delete`
                );
                console.log(resp.data);
                window.location.href='/evaluaciones';
            } catch (err) {
                // Handle Error Here
                console.error(err);
            }
        }, }" class="flex items-center justify-center pt-28 pb-10 px-16 sm:px-6 lg:px-8">
    <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
        <div>
        <h1 class="font-blue-appac text-left text-4xl font-black">Evaluación de {{$evaluation->beneficiary->name}}</h1>
        <h3 class="font-blue-appac text-left text-2xl font-black">{{$evaluation->date}}</h3>
        <h3 class="font-blue-appac text-left text-2xl font-black">Evaluador:  {{$evaluation->evaluator->name . ' ' . $evaluation->evaluator->last_name}}</h3>
        </div>
        <button type="button"   @click=" isModalOpen = true, hasOverflow=true, idEvaluation={{$evaluation->id}}"
            class="px-20 mr-2  py-2 rounded-lg bg-default-grey text-gray text-center text-center inline-flex items-center hover:bg-gray-200">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <a class="font-semibold text-gray text-center">
                Regresar
            </a>
        </button>

        <form class="grid grid-rows-11 gap-y-2 items-center" method="post" action="/evaluaciones/{{$evaluation->id}}/submit">
          @csrf
          @include('Evaluation.form',['mode'=>'create'])
        </form>
        

    </div>
</div>

@endsection
