
@extends('layouts.app')

@section('content')


<div class="container">

    @if (Session::has('eliminado'))
        <div class="alert alert-success" role="alert"> {{Session::get('eliminado')}} </div>      
    @endif

    @if (Session::has('nuevo'))
        <div class="alert alert-success" role="alert"> {{Session::get('nuevo')}} </div>       
    @endif

    @if (Session::has('editado'))
        <div class="alert alert-success" role="alert"> {{Session::get('editado')}} </div>    
    @endif 

    
    <h1 id="JornadaTitulo" class="bluenefro"><i class="bi bi-people-fill"></i> Beneficiarios</h1>

    <div class="container">
    
    <br/>
    <br/>

    <div class= "container box" id="searchfields">
        
        <div class= "row">
            
            <div class= "col-sm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h5>Buscar por Nombre:</h5>
                    </div>
                    <div class="panel-body">
                    <input type="text" name="search" id="searchnombre"
                        class="form-control" placeholder="Nombre Beneficiario..."/>
                    </div>
                </div>
            </div>

            <div class= "col-sm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Buscar por Edad:</h5>
                    </div>
                    <div class="panel-body">
                        <input type="text" name="search" id="searchage"
                        class="form-control" placeholder="Edad Beneficiario..."/>
                    </div>
                    <div class="table-responsive">
                    </div>
                </div>
            </div>
        </div>
    
        <br>

        <div class= "row">
            
            <div class= "col-sm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h5>Buscar por Municipio:</h5>
                    </div>
                    <div class="panel-body">
                    <input type="text" name="search" id="searchmunicipio"
                        class="form-control" placeholder="Municipio Beneficiario..."/>
                    </div>
                </div>
            </div>

            <div class= "col-sm">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Buscar por Género:</h5>
                    </div>
                    <div class="panel-body">
                        <select class="form-select" aria-label="selectgenero" id="searchgenero">
                            <option value="">Todos</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Masculino">Masculino</option>
                        </select>
                    </div>
                    <div class="table-responsive">
                    </div>
                </div>
            </div>

        </div>

    </div>

    <br>
    
    <div class="row">
        <div class="col-sm text-right">
        <a id="beneficiarioAddB" href="{{ url('beneficiario/create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Registrar Beneficiario </a>
    </div>
</div>

<br>

<table class="table table-light table-hover table-responsive-sm">
    
    <thead class="greennefrobg whitenefro">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Género</th>
            <th>Municipio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    <tbody id="dynamic-row">
        @foreach ($Beneficiario as $beneficiario)
        <tr>
            <td>{{$beneficiario->id}}</td>
            <td>{{$beneficiario->nombreBeneficiario}}</td>
            <td>{{$beneficiario->age}}</td>
            <td>{{$beneficiario->genero}}</td>
            <td>{{$beneficiario->municipio}}</td>
        
            <td>
                <a href="{{url('/beneficiario/'.$beneficiario->id)}}" class="btn btn-outline-dark">
                    Consultar
                </a>

                <a href="{{url('/beneficiario/'.$beneficiario->id.'/edit')}}" class="btn btn-outline-secondary">
                    Editar
                </a>

                <form action="{{url('/beneficiario/'.$beneficiario->id)}}" class="d-inline" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" onclick="return confirm('¿Quiere Eliminar Beneficiario?')"  class="btn btn-outline-danger" value="Borrar">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>

{{$Beneficiario->links()}}

</div>

<!-- <script>
    $('body').on('keyup change', '#searchfields', function()
    {
        if ($( "#searchage" ).val() == '')
        {
            var searchQuest = $( "#searchnombre" ).val();
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
                    searchQuestGenero: searchQuestGenero,
                },
                success: function(res)
                {
                    var tableRow = '';
                    $('#dynamic-row').html('');
                    $.each(res, function(index, value)
                    {
                        dob = new Date(value.fechaNacimiento);
                        var today = new Date();
                        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                        var urlshow = 'beneficiario/'+value.id;
                        var urledit = 'beneficiario/'+value.id+'/edit';
                        var urldel = 'beneficiario/'+value.id;
                        var segicon;

                        segicon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/></svg> No'

                        tableRow = '<tr><td>'+value.id+'</td><td>'+value.nombreBeneficiario+'</td><td>'+age+'</td><td>'+value.genero+'</td><td>'+segicon+'</td>';
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
                        dob = new Date(value.fechaNacimiento);
                        
                        var today = new Date();
                        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                        var urlshow = 'beneficiario/'+value.id;
                        var urledit = 'beneficiario/'+value.id+'/edit';
                        var urldel = 'beneficiario/'+value.id;
                        var segicon;
                            
                        segicon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/></svg> No'
                        
                        tableRow = '<tr><td>'+value.id+'</td><td>'+value.nombreBeneficiario+'</td><td>'+age+'</td><td>'+value.genero+'</td><td>'+segicon+'</td>';
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
</script> -->










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
                        dob = new Date(value.fechaNacimiento);
                        var today = new Date();
                        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                        var urlshow = 'beneficiario/'+value.id;
                        var urledit = 'beneficiario/'+value.id+'/edit';
                        var urldel = 'beneficiario/'+value.id;

                        tableRow = '<tr><td>'+value.id+'</td><td>'+value.nombreBeneficiario+'</td><td>'+age+'</td><td>'+value.genero+'</td><td>'+value.municipio+'</td>';
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
                        dob = new Date(value.fechaNacimiento);
                        
                        var today = new Date();
                        var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
                        var urlshow = 'beneficiario/'+value.id;
                        var urledit = 'beneficiario/'+value.id+'/edit';
                        var urldel = 'beneficiario/'+value.id;
                        
                        tableRow = '<tr><td>'+value.id+'</td><td>'+value.nombreBeneficiario+'</td><td>'+age+'</td><td>'+value.genero+'</td><td>'+value.municipio+'</td>';
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