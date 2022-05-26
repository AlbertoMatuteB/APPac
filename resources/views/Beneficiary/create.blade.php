@extends('layouts.app')

@section('content')
<div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
    <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
        <div>
            <h1 class="font-blue-appac text-left text-4xl font-black">Crear nuevo beneficiario</h2>
        </div>


        <button type="button"  onclick="return confirm('¿Desea regresar a beneficiarios?')"
            class="px-20 mr-2  py-2 rounded-lg bg-default-grey text-gray text-center text-center inline-flex items-center hover:bg-gray-200">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <a class="font-semibold text-gray text-center" href="{{ url('/beneficiarios') }}">
                Regresar
            </a>
        </button>


        <form class="grid grid-rows-11 gap-y-2 items-center" method="POST" action="/beneficiarios">
          @csrf
          @include('Beneficiary.form',['mode'=>'create'])
        </form>

    </div>
</div>

@endsection
