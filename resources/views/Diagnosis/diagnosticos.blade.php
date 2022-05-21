@extends('layouts.app')
@section('content')

<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">Diagnosticos</h2>
            </div>
            <div
                class=" w-full rounded-xl flex justify-between items-center py-4 pr-10">
                <div class="flex flex-col">
                </div>
                <div class="flex flex-col">
                    <div class="mb-4" >&nbsp;</div>
                    <a class="text-white text-center w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24"
                        href="/diagnosticos/nuevo">Agregar</a>
                </div>
            </div>
            <div class="">
                <table class="table-auto w-full">
                    <thead class="">
                        <tr class="bg-transparent">
                            <th class="text-left p-4 font-medium">
                                Nombre
                            </th>
                            <th class="text-left p-4 font-medium">
                                ID
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diagnosticos as $diagnostico)
                        <tr class="border-y hover:bg-gray-50">
                            <td class="p-4">
                                {{$diagnostico->name}}
                            </td>
                            <td class="p-4">
                                {{$diagnostico->id}}
                            </td>
                            <td class="p-4">
                                <div class="group inline-block relative">
                                    <a class="z-10">
                                    <a class="z-10 bg-white border hover:bg-gray-200 font-light text-lg py-2 px-4 block whitespace-no-wrap">
                                                <form action="{{url('/diagnosticos/'.$diagnostico->id . '/delete')}}" class="" method="post">
                                                    @csrf
                                                    <input type="submit" onclick="return confirm('¿Quiere Eliminar Diagnostico?')"  class="btn btn-outline-danger" value="Eliminar">
                                                </form>
                                        </a>
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

@endsection
