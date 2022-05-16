@extends('layouts.app')


@if (count($errors)>0)
    
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
           <li> {{$error}} </li>
        @endforeach 
        </ul>
    </div>
    
@endif


<link href="{{ asset('css/app.css') }}" rel="stylesheet">


<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">{{$modo}} Beneficiario</h2>
            </div>

            <div class="grid grid-cols-4 gap-x-6 gap-y-2 items-center">
                <div>
                    <button class="w-full rounded-lg bg-default-grey text-gray text-center py-2 px-2" href="{{ url('beneficiario') }}">
                        <a class="font-semibold text-gray text-center" href="{{ url('beneficiario') }}">< Regresar </a>
                    </button>
                </div>
                <div></div>
                <div></div>
                <div></div>
            </div>


            <div class="grid grid-rows-11 gap-x-6 gap-y-2 py-4 pr-10">

                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Nombre: {{ $beneficiario->nombreBeneficiario }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Fecha de Nacimiento: {{ $beneficiario->fechaNacimiento }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Edad: {{ $beneficiario->age}}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Género: {{ $beneficiario->genero }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">CURP: {{ $beneficiario->curp }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Diagnóstico: {{ $beneficiario->diagnostico }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Tipo de Sangre: {{ $beneficiario->tipoSangre }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Correo Electrónico: {{ $beneficiario->email }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Número Telefónico: {{ $beneficiario->telefono }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2t">Municipio: {{ $beneficiario->municipio }}</a>
                </div>
                <div class=" font-semibold pt-2">
                    <a class="font-semibold pt-2">Observaciones: {{ $beneficiario->observacion }}</a>
                </div>            
            </div>
 

            <div class="grid grid-cols-4 gap-x-6 gap-y-2 items-center py-4 pr-10">
                <div></div>
                <div>
                    <button class="w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24">
                        <a class="text-white text-center" href="{{url('/beneficiario/'.$beneficiario->id.'/edit')}}">Editar</a>
                    </button>
                </div>
                <div>
                    <button class="w-full rounded-lg bg-blue-appac text-white text-center py-2 px-24">
                        <form action="{{url('/beneficiario/'.$beneficiario->id)}}"  method="post">
                        @method('DELETE')
                        @csrf
                            <input type="submit" onclick="return confirm('¿Quiere Borrar Beneficiario?')"  class="btn btn-danger" value="Borrar">
                        </form>
                    </button>

                </div>
                <div></div>
            </div>
    
    
        </div>
  </div>
</div>
