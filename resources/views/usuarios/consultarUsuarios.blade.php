@extends('layouts.app')
@section('content')

<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">Usuarios</h2>
            </div>
            <div class="bg-default-grey w-full rounded-xl flex justify-between items-center py-4 pr-10">

                <div class="flex flex-col">
                    <div class="font-semibold pl-4 mb-4">Buscar por rol</div>
                    <form method="POST" action="/crearUsuario" class="pl-4 items-center flex flex-row">
                        @csrf

                        <select
                            class="w-full block appearance-none bg-white border-gray-200 placeholder-slate-400 text-slate-600 py-2 px-4 pr-8  border-2 rounded-l-lg leading-tight focus:outline-none focus:border-slate-300">
                            <option>Administrador</option>
                            <option>Usuario base</option>
                        </select>
                        <button type="submit" class="rounded-r-lg bg-slate-300 hover:bg-slate-400 text-white text-center py-2 px-4">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </button>


                    </form>

                </div>
                <div class="flex flex-col">
                    <div class="mb-4" >&nbsp;</div>
                    <a class="text-white text-center w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24"
                        href="#" target="_blank" rel="">Agregar</a>
                </div>

                {{-- <div class="flex flex-column">
                    <div class="font-semibold pl-4">Buscar por rol</div>
                </div>


                <div class="flex flex-row">
                    <form method="POST" action="/crearUsuario" class="pl-4  items-center">
                        @csrf
                        <div>
                            <select
                                class="block appearance-none w-full bg-white border-gray-200 placeholder-slate-400 text-slate-600 py-2 px-4 pr-8  border-2 rounded-2xl leading-tight focus:outline-none focus:border-slate-300">
                                <option>Administrador</option>
                                <option>Usuario base</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit"
                                class="w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24">
                                <a class="text-white text-center">Buscar</a>
                            </button>

                        </div>
                    </form>
                </div>

                <div class="flex flex-row">
                    <a class="text-white text-center w-full rounded-lg bg-green-appac text-white text-center py-2 px-24"
                        href="#" target="_blank" rel="">Agregar</a>
                </div> --}}

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
                                    <a class="z-10">
                                        <a class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap"
                                            href="/usuario/{{$usuario['id']}}">
                                            Consultar</a>
                                    </a>
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
