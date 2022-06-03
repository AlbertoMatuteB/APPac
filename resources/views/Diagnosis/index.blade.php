@extends('layouts.app')
@section('content')
@php
$idDiagnosis = 0
@endphp

<div class="pt-28" x-data="{ isModalOpen: false, idDiagnosis:0, 
    async deleteDiagnosis(id) {
            try {
                const resp = await axios.post(
                    `/api/diagnosticos/${id}/delete`
                );
                console.log(resp.data);
                location.reload();
            } catch (err) {
                // Handle Error Here
                console.error(err);
            }
        },}" x-cloak>
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center  px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">Diagnósticos</h2>
            </div>
            <div class="bg-default-grey w-full rounded-xl flex justify-end items-center py-12 pr-10">
                <div>
                    <a class="text-white text-center w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24"
                        href="/diagnosticos/nuevo">Agregar</a>
                </div>
            </div>
            <div class="">
                <table class="table-auto w-full">
                    <thead class="">
                        <tr class="bg-transparent">
                            <th class="text-left p-4 font-medium">
                                ID
                            </th>
                            <th class="text-left p-4 font-medium">
                                Nombre
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diagnosis as $diagnostic)
                        <tr class="border-y hover:bg-gray-50">
                            <td class="p-4">
                                {{$diagnostic->id}}
                            </td>
                            <td class="p-4">
                                {{$diagnostic->name}}
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
                                                href="{{url('/diagnosticos/'.$diagnostic->id.'/edit')}}">
                                                Editar</a>
                                        </li>
                                        <li class="z-10">
                                            <a class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap"
                                            @click=" isModalOpen = true, idDiagnosis={{$diagnostic->id}},hasOverflow=true">
                                            Eliminar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="group inline-block relative">
                                  
                                    
                                </div>
                            </td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="flex justify-end">
                {{$diagnosis->links()}}
            </div>
        </div>
    </div>

    <div x-cloak class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50"
        style="background-color: rgba(0,0,0,.5);" x-show="isModalOpen">
        <div x-cloak class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded mx-2 md:mx-0"
            @click.away="isModalOpen = false, hasOverflow=false">
            <h2 class="text-2xl">¿Seguro que quieres borrar diagnóstico?</h2>
            <div class="flex flex-row justify-end space-x-4 mt-8">
                <button class="bg-blue-appac text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none"
                    @click="isModalOpen = false, deleteDiagnosis(idDiagnosis), hasOverflow=false" type="submit">Aceptar</button>

                {{-- <form action="{{url('/diagnosticos/'. . '/delete')}}" method="post">
                @csrf
                <button class="bg-blue-appac text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none"
                    @click="isModalOpen = false" type="submit">Aceptar</button>
                </form> --}}

                <button class="bg-slate-400 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none"
                    @click="isModalOpen = false, hasOverflow=false">Cancelar</button>
            </div>
        </div>
    </div>
</div>

@endsection
