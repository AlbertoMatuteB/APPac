@extends('layouts.app')
@section('content')
@if(Auth::user()->role_id == 1)
<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">{{$usuario['name']}}</h2>
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
                                    <form action="/usuarios/{{$usuario['id']}}" method="post">
                                        <input class="z-10 border font-light text-lg py-2 px-4 block whitespace-no-wrap bg-red-400 hover:bg-red-500 text-align: center" type="submit" value="Delete" />
                                        <input type="hidden" name="_method" value="delete" />
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- {{die($beneficiary)}} --}}
@endif
@endsection

