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
                class="bg-default-grey w-full rounded-xl grid grid-rows-2 grid-cols-4 gap-x-6 gap-y-2 items-center py-4 pr-10">
                <div class="font-semibold pl-4">Buscar Beneficiarios</div>
                <div class="font-semibold">Buscar por edad</div>
                <div class="font-semibold">Buscar por Municipio</div>
                <div>&nbsp;</div>
                <div class="pl-4">
                    <span
                        class="z-10 leading-snug font-normal absolute text-center text-slate-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Buscar..." id="searchnombre" name="search"
                        class="bg-white px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8" />
                </div>
                <div> <span
                        class="z-10 leading-snug font-normal absolute text-center text-slate-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-1">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Buscar..." id="searchage" name="search"
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
                    <button class="w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24">
                        <a class="text-white text-center" href="#"
                            target="_blank" rel="">Agregar</a>
                    </button>
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
                                Fecha de nacimiento
                            </th>
                            <th class="text-left p-4 font-medium">
                                CURP
                            </th>
                            <th class="text-left p-4 font-medium">
                                Género
                            </th>
                            <th class="text-left p-4 font-medium">
                                Correo
                            </th>
                            <th class="text-left p-4 font-medium">
                                Institucion
                            </th>
                            <th class="text-right p-4 font-medium">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beneficiaries as $beneficiary)
                        <tr class="border-y hover:bg-gray-50">
                            <td class="p-4">
                                {{$beneficiary->name}}
                            </td>
                            <td class="p-4">
                                {{$beneficiary->birth_date}}
                            </td>
                            <td class="p-4">
                                {{$beneficiary->CURP}}
                            </td>
                            <td class="p-4">
                                {{$beneficiary->genre}}
                            </td>
                            <td class="p-4">
                                {{$beneficiary->email}}
                            </td>
                            <td class="p-4">
                                {{$beneficiary->institution_id}}
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
                                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$beneficiaries->links()}}
        </div>
    </div>
</div>
{{-- {{die($beneficiary)}} --}}

<script>
    $('body').on('keyup change', '#searchfields', function()
    {
        if ($( "#searchage" ).val() == '')
        {
            var searchQuest = $( "#searchnombre" ).val();
            var searchQuestMunicipio = $( "#searchmunicipio" ).val();
            var searchQuestGenero = $("#searchgenero option:selected").val();
            $.ajax(
            {
                method: 'POST',
                url:'{{ route("search-beneficiarios") }}',
                dataType: 'json',
                data:
                {
                    '_token': '{{ csrf_token() }}',
                    searchQuest: searchQuest,
                    searchQuestMunicipio: searchQuestMunicipio,
                    searchQuestGenero: searchQuestGenero,
                },
                success: function(res)
                {
                    var tableRow = '';
                    $('#dynamic-row').html('');
                    $.each(res, function(index, value)
                    {
                        dob = new Date(value.birth_date);
                        var today = new Date();
                        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                        var urlshow = 'beneficiario/'+value.id;
                        var urledit = 'beneficiario/'+value.id+'/edit';
                        var urldel = 'beneficiario/'+value.id;

                        tableRow = '<tr><td>'+value.id+'</td><td>'+value.name+'</td><td>'+age+'</td><td>'+value.genre+'</td><td>'+value.city+'</td>';
                        tableRow += '<td><a href="'+urlshow+'" class="btn btn-outline-dark">Consultar</a>';
                        tableRow += '<a href="'+urledit+'" class="btn btn-outline-secondary">Editar</a>';
                        tableRow += '<form action="'+urldel+'" class="d-inline" method="post">@method("DELETE") @csrf<input type="submit" onclick="return confirm("¿Quiere Borrar Beneficiario?")"  class="btn btn-outline-danger" value="Borrar"></form>';
                        tableRow += '</td></tr>'
                        $('#dynamic-row').append(tableRow);
                    });
                    console.log(tableRow);
                }
            });
        }
        else
        {
            var searchQuest = $( "#searchnombre" ).val();
            var searchQuestMunicipio = $( "#searchmunicipio" ).val();
            var today = new Date().getFullYear();
            var searchQuestAge = today - $( "#searchage" ).val();
            
            var m = new Date().getMonth() + 1;
            if (m < 10)
            {
                m = '0' + m;
            }
            
            var d = new Date().getDate();
            if (d < 10)
            {
                d = '0' + d;
            }
            var fechaBegin = searchQuestAge - 1 + '-' + m + '-' + d;
            var fechaEnd = searchQuestAge + '-' + m + '-' + d;
            var searchQuestGenero = $("#searchgenero option:selected").val();
            
            $.ajax(
            {
                method: 'POST',
                url:'{{ route("search-beneficiarios-age") }}',
                dataType: 'json',
                data:
                {
                    '_token': '{{ csrf_token() }}',
                    searchQuest: searchQuest,
                    searchQuestMunicipio: searchQuestMunicipio,
                    searchQuestAge: searchQuestAge,
                    searchQuestGenero: searchQuestGenero,
                    fechaBegin: fechaBegin,
                    fechaEnd: fechaEnd,
                },
                success: function(res)
                {
                    var tableRow = '';
                    $('#dynamic-row').html('');
                    $.each(res, function(index, value)
                    {
                        dob = new Date(value.birth_date);
                        
                        var today = new Date();
                        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                        var urlshow = 'beneficiario/'+value.id;
                        var urledit = 'beneficiario/'+value.id+'/edit';
                        var urldel = 'beneficiario/'+value.id;
                        
                        tableRow = '<tr><td>'+value.id+'</td><td>'+value.name+'</td><td>'+age+'</td><td>'+value.genre+'</td><td>'+value.city+'</td>';
                        tableRow += '<td><a href="'+urlshow+'" class="btn btn-outline-dark">Consultar</a>';
                        tableRow += '<a href="'+urledit+'" class="btn btn-outline-secondary">Editar</a>';
                        tableRow += '<form action="'+urldel+'" class="d-inline" method="post"><input type="submit" onclick="return confirm("¿Quiere Borrar Beneficiario?")"  class="btn btn-outline-danger" value="Borrar"></form>';
                        tableRow += '</td></tr>'
                        
                        $('#dynamic-row').append(tableRow);
                    });
                }
            });
        }
    });
</script>
@endsection
