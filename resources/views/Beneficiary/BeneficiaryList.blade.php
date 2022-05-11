@extends('layouts.app')
@section('content')

<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">Beneficiarios</h2>
            </div>
            <div
                class="bg-default-grey w-full rounded-xl grid grid-rows-2 grid-cols-4 gap-x-6 gap-y-2 items-center py-4">
                <div class="font-semibold pl-4">Buscar Beneficiarios</div>
                <div class="font-semibold">Buscar por edad</div>
                <div class="font-semibold">Buscar por Municipio</div>
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
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <div>
                    <a class="w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24" href="#"
                        target="_blank" rel="">Agregar</a>
                </div>
            </div>
            <div class="overflow-x-auto border-x border-t">
                <table class="table-auto w-full">
                    <thead class="border-b">
                        <tr class="bg-gray-100">
                            <th class="text-left p-4 font-medium">
                                Name
                            </th>
                            <th class="text-left p-4 font-medium">
                                Email
                            </th>
                            <th class="text-left p-4 font-medium">
                                Role
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">
                                Test name
                            </td>
                            <td class="p-4">
                                pp popo
                            </td>
                            <td class="p-4">
                                Administrator
                            </td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4">
                                Test 2
                            </td>
                            <td class="p-4">
                                cbt
                            </td>
                            <td class="p-4">
                                Super Administrator
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- {{die($beneficiary)}} --}}


@endsection
