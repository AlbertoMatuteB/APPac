@extends('layouts.app')
@section('content')

<div class="pt-28" x-data="{ isModalOpen: false, idEvaluation:0, 
    async deleteEvaluation(id) {
            try {
                const resp = await axios.post(
                    `/api/evaluaciones/${id}/delete`
                );
                console.log(resp.data);
                location.reload();
            } catch (err) {
                // Handle Error Here
                console.error(err);
            }
        },}">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center pb-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">Evaluaciones</h2>
            </div>
            <div
                class="bg-default-grey w-full rounded-xl grid grid-rows-2 grid-cols-4 gap-x-6 gap-y-2 items-center py-4 pr-10">
                <div class="font-semibold pl-4">Buscar por Beneficiario</div>
                <div class="font-semibold">Buscar por fecha</div>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                <div class="">
                    <form method="POST" action="/evaluaciones/nombre" class="pl-4 items-center flex flex-row">
                        @csrf
                        <span
                            class="z-10 leading-snug font-normal absolute text-center text-slate-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </span>
                        <input type="text" placeholder="Buscar..." id="searchnombre" name="search"
                            class="bg-white px-3 py-2 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-l-lg outline-none focus:border-slate-300 w-full pl-8" />
                        <button type="submit"
                            class="rounded-r-lg  bg-slate-300 hover:bg-slate-400 text-white text-center py-2 px-4">
                            <svg class="w-6 h-6" fill="bg-blue-appac" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div>
                    <form method="POST" action="/evaluaciones/fecha" class="items-center flex flex-row">
                        @csrf

                        <input type="date" placeholder="Buscar..." id="search" name="search"
                            class="bg-white px-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-l-lg outline-none focus:border-slate-300 w-full" />
                        <button type="submit"
                            class="rounded-r-lg bg-slate-300 hover:bg-slate-400 text-white text-center py-2 px-4">
                            <svg class="w-6 h-6" fill=".bg-blue-appac" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </form>
                </div>
                <div>&nbsp;</div>
                <div>
                    <a class="text-white text-center w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24"
                        href="{{ url('evaluaciones/nuevo') }}">Agregar</a>

                </div>
            </div>
            <div class="">
                <table class="table-auto w-full">
                    <thead class="">
                        <tr class="bg-transparent">
                            <th class="text-left p-4 font-medium">
                                Beneficiario
                            </th>
                            <th class="text-left p-4 font-medium">
                                Fecha de evaluación
                            </th>
                            <th class="text-left p-4 font-medium">
                                Evaluador
                            </th>
                            <th class="text-right p-4 font-medium">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($evaluations as $evaluation)
                        {{--<tr class="border-y hover:bg-gray-50"
                        onclick="window.location.href='{{url('/evaluacion/'.$evaluation->id)}}';">--}}
                        <tr class="border-y hover:bg-gray-50">
                            <td class="p-4">
                                {{$evaluation->beneficiary->name}}
                            </td>
                            <td class="p-4">
                                {{$evaluation->date}}
                            </td>
                            <td class="p-4">
                                {{$evaluation->evaluator->name . ' ' . $evaluation->evaluator->last_name}}
                            </td>
                            </td>
                            <td class="p-4">
                                <div class="group inline-block relative">
                                    <button class="inline-flex items-center">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="pt-2 absolute hidden group-hover:block z-10">
                                        <li class="z-10">
                                            <a class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap"
                                                href="{{url('/evaluacion/'.$evaluation->id)}}">
                                                Consultar</a>
                                        </li>
                                        <li class="z-10">
                                            <a class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap"
                                                @click=" isModalOpen = true, idEvaluation={{$evaluation->id}},hasOverflow=true">
                                                Eliminar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                            <div x-cloak
                                class="absolute top-0 left-0 w-full h-full flex items-center justify-center z-50"
                                style="background-color: rgba(0,0,0,.5);" x-show="isModalOpen">
                                <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded mx-2 md:mx-0"
                                    @click.away="isModalOpen = false,  hasOverflow=false">
                                    <h2 class=" text-2xl">¿Seguro que quieres borrar la evaluación?</h2>
                                    <div class="flex flex-row justify-end space-x-4 mt-8">
                                        <button
                                            class="bg-blue-appac text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none"
                                            @click="isModalOpen = false, deleteEvaluation(idEvaluation), hasOverflow=false"
                                            type="submit">Aceptar</button>

                                        {{-- <form action="{{url('/evaluaciones/'.$evaluation->id . '/delete')}}"
                                        method="post">
                                        @csrf
                                        <button
                                            class="bg-blue-appac text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none"
                                            @click="isModalOpen = false" type="submit">Aceptar</button>
                                        </form> --}}

                                        <button
                                            class="bg-slate-400 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none"
                                            @click=" isModalOpen = false , hasOverflow=false">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$evaluations->links()}}
        </div>
    </div>
</div>

@endsection
