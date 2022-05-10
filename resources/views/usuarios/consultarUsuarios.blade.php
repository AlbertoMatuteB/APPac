@extends('layouts.app')
@section('content')
<table class="table-fixed">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Correo</th>
      <th>Consultar</th>
    </tr>
  </thead>
  <tbody>
@foreach($usuarios as $usuario)
    <tr>
      <td>{{$usuario['name']}}</td>
      <td>{{$usuario['last_name']}}</td>
      <td>{{$usuario['email']}}</td>
      <td><a href="/usuario/{{$usuario['id']}}">Consultar</a></td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection