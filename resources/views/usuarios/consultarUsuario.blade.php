@extends('layouts.app')
@section('content')
<h1>{{$usuario['name']}}</h1>
<h1>{{$usuario['last_name']}}</h1>
<h1>{{$usuario['email']}}</h1>
<h1><a href=''> Eliminar </a> </h1>
@endsection
