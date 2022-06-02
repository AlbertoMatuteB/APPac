@extends('layouts.app')

@section('content')

<div class="pt-28">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center pb-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <h1 class="font-blue-appac text-left text-4xl font-black">Crear Nueva Evaluación</h1>

            <button type="button" onclick="window.location.href='/evaluaciones';"
                class="px-20 mr-2  py-2 rounded-lg bg-default-grey text-gray text-center text-center inline-flex items-center hover:bg-gray-200 mt-4">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <a class="font-semibold text-gray text-center" href="{{ url('/evaluaciones') }}">
                    Regresar
                </a>
            </button>
            <form class="grid grid-rows-auto gap-y-2 items-center" method="POST" action="/evaluaciones/crear">
                @csrf

                <div class="font-semibold">
                    <span>Seleccionar Beneficiario</span>
                    <div>
                        <select name="beneficiary_id" id="beneficiary_id"
                            class="block appearance-none w-full bg-default-grey border-gray-200 placeholder-slate-400 text-slate-600 py-1 px-3 pr-8  border-2 rounded-2xl leading-tight focus:outline-none focus:border-slate-300"
                            required>
                            <option disabled selected value> -- Seleccione aqui -- </option>
                            @foreach ($beneficiaries as $beneficiary)
                            <option value="{{$beneficiary->id}}"> {{$beneficiary->name}}</option>
                            @endforeach
                        </select>

                        @error('beneficiary_id')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="font-semibold">
                    <span>Observaciones</span>
                    <div>
                        <input id="observations" type="text"
                            class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base border-2 rounded-2xl outline-none focus:border-slate-300 w-full"
                            name="observations" required autocomplete="observations" autofocus>

                        @error('observations')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-0 py-4">
                    <div class="flex items-center justify-center items-center">
                        <button class="rounded-lg bg-blue-appac py-2 px-32 " type="submit">
                            <a class="w-full text-white text-center">Comenzar</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
