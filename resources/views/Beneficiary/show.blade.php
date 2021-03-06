@extends('layouts.app')

@section('content')
<div class="min-h-full flex items-center justify-center pt-28 pb-10 px-16 sm:px-6 lg:px-8">
    <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
        <div>
            <h1 class="font-blue-appac text-left text-4xl font-black">Consultar Beneficiario</h1>
        </div>


        <button type="button" onclick="window.location.href='/beneficiarios';"
            class="px-20 mr-2 py-2 rounded-lg bg-default-grey text-gray text-center text-center inline-flex items-center hover:bg-gray-200">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <a class="font-semibold text-gray text-center" href="{{ url('/beneficiarios') }}">
                Regresar
            </a>
        </button>


        
        @include('Beneficiary.form',['mode'=>'Consult'])
        

    </div>
</div>

@endsection

{{-- @extends('layouts.app')

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

        @csrf
        {{ method_field('PATCH') }}
        @include('Beneficiary.card',['modo'=>'Detalle de'])

    </div>

@endsection --}}