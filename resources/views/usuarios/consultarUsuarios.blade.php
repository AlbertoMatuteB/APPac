@extends('layouts.app')
@section('content')

<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">Usuarios</h2>
            </div>
            <div
                class="bg-default-grey w-full rounded-xl grid grid-rows-2 grid-cols-4 gap-x-6 gap-y-2 items-center py-4 pr-10">
                <div class="font-semibold pl-4">Buscar usuario</div>
                <div class="font-semibold">Buscar por correo</div>
                <div class="font-semibold pl-4">Buscar por rol</div>
                <div>&nbsp;</div>
                <div class="pl-4">
                    <span
                        class="z-10 h-full leading-snug font-normal absolute text-center text-slate-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Buscar..."
                        class="bg-white px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8" />
                </div>
                <div> <span
                        class="z-10 h-full leading-snug font-normal absolute text-center text-slate-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Buscar..."
                        class="bg-white px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8" />
                </div>
                <div>
                    <select
                        class="block appearance-none w-full bg-white border-gray-200 placeholder-slate-400 text-slate-600 py-2 px-3 pr-8  border-2 rounded-2xl leading-tight focus:outline-none focus:border-slate-300">
                        <option>Administrador</option>
                        <option>Usuario base</option>
                    </select>
                </div>
                <div>
                    <button class="w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24">
                        <a class="text-white text-center" href="#"
                            target="_blank" rel="">Agregar</a>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
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
                                Correo
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
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
                                                href="/usuario/{{$usuario['id']}}">
                                                Consultar</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- {{die($beneficiary)}} --}}
@endsection
