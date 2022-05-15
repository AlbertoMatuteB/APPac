@extends('layouts.app')

@section('content')
@if (count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
    </ul>
</div>

@endif


<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">

            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">{{$modo}} Beneficiario</h2>
            </div>


            <button type="button"
                class="px-20 mr-2  py-2 rounded-lg bg-default-grey text-gray text-center text-center inline-flex items-center hover:bg-gray-200">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <a class="font-semibold text-gray text-center" href="{{ url('beneficiarios') }}">
                    Regresar
                </a>
            </button>

        <div class="grid grid-rows-11 gap-x-6 gap-y-2 py-4 pr-10">

        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">Nombre: {{ $beneficiary->name }}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">Fecha de Nacimiento: {{ $beneficiary->birth_date }}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">Edad: {{ $beneficiary->age()}}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">Género: {{ $beneficiary->gender }}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">CURP: {{ $beneficiary->CURP }}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">Tipo de Sangre: {{ $beneficiary->blood_type }}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">Correo Electrónico: {{ $beneficiary->email }}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2t">Municipio: {{ $beneficiary->city }}</a>
        </div>
        <div class=" font-semibold pt-2">
            <a class="font-semibold pt-2">Observaciones: {{ $beneficiary->observations }}</a>
        </div>
    </div>


    <div class="flex items-center justify-center items-center py-4 px-32">
            <button class="rounded-lg bg-blue-appac text-white text-center py-2 px-24 mr-10">
                <a class="text-white text-center" href="{{url('/beneficiarios/'.$beneficiary->id.'/edit')}}">
                    Editar
                </a>
            </button>
            <button class="rounded-lg bg-red-600 text-white text-center py-2 px-24">
                <form action="{{url('/beneficiarios/'.$beneficiary->id . '/delete')}}" method="post">
                @csrf
                <input type="submit" onclick="return confirm('¿Quiere Borrar Beneficiario?')" class="btn btn-danger"
                    value="Borrar">
                </form>
            </button>
    </div>


</div>
</div>
</div>
@endsection
