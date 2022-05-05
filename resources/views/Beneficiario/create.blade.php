@extends('layouts.app')

@section('content')


<div class="container">

@if(isset($beneficiario))
  <form action="{{url('/beneficiario/'.$beneficiario->id)}}" method="post">
  @method('PUT')
  @include('beneficiario.form',['modo'=>'Guardar'])
@else
  <form action="{{url('/beneficiario/')}}" method="post">
  @include('beneficiario.form',['modo'=>'Registrar'])
@endif
  @csrf
  

</form>
</div>
@endsection