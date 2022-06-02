@extends('layouts.app')
@section('content')
@if(Auth::user()->role_id == 1)
<div class="pt-28" x-data="{ isModalOpen: false }">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center pb-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">{{$usuario['name']}}</h2>
            </div>
            <div class="">
                <table class="table-auto w-full">
                    <thead class="">
                        <tr class="bg-transparent">
                            <th class="text-left p-4 font-medium">
                                Nombre
                            </th>
                            <th class="text-left p-4 font-medium">
                                Apellido
                            </th>
                            <th class="text-left p-4 font-medium">
                                Rol
                            </th>
                            <th class="text-left p-4 font-medium">
                                E-mail
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-y hover:bg-gray-50">
                            <td class="p-4">
                                {{$usuario['name']}}
                            </td>
                            <td class="p-4">
                                {{$usuario['last_name']}}
                            </td>
                            <td class="p-4">
                                {{$usuario['role']}}
                            </td>
                            <td class="p-4">
                                {{$usuario['email']}}
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
                                                href="/usuario/{{$usuario['id']}}/editar">
                                                Editar</a>
                                        </li>
                                        <li class="z-10">
                                            <a class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap"
                                                @click=" isModalOpen = true ">
                                                Elminiar
                                            </a>
                                            {{-- <a class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap">
                                                <form action="/usuarios/{{$usuario['id']}}" method="post">
                                            <input
                                                class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap"
                                                type="submit" value="Eliminar"
                                                onclick="return confirm('¿Eliminar Usuario?')"
                                                @click=" isModalOpen = true " />
                                            <input type="hidden" name="_method" value="delete" />
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </form>
                                            </a> --}}

                                        </li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div x-cloak class="fixed top-0 left-0 w-full h-full flex items-center justify-center z-50" style="background-color: rgba(0,0,0,.5);" x-show="isModalOpen" >
        <div x-cloak class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded mx-2 md:mx-0" @click.away="isModalOpen = false">
            <h2 class="text-2xl">¿Seguro que quieres borrar este usuario?</h2>
            <div class="flex flex-row justify-end space-x-4 mt-8">

                <form action="{{url('/usuarios/'. $usuario['id'] . '/delete')}}" method="post">
                    @csrf
                    <button class="bg-blue-appac text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none" @click="isModalOpen = false" type="submit">Aceptar</button>
                </form>

                <button class="bg-slate-400 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none" @click="isModalOpen = false">Cancelar</button>
            </div>
        </div>
    </div>
</div>
{{-- {{die($beneficiary)}} --}}
@endif
@endsection
