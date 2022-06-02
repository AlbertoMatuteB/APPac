@extends('layouts.app')

@section('content')

<!-- Eliminar al terminar el proyecto!!!!!!!!!! -->
@if(Auth::user()->role_id == 2)
<h1 >CONTACTA AL ADMINISTRADOR</h1>
@endif
@if(Auth::user()->role_id == 1)

<div class="pt-28">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <div class="font-blue-appac text-left text-4xl font-black">{{ __('Crear Diagnóstico') }}</div>
               
                <button type="button"   onclick="window.location.href='/diagnosticos';" 
            class="px-20 mr-2  py-2  my-2 rounded-lg bg-default-grey text-gray text-center text-center inline-flex items-center hover:bg-gray-200">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <a class="font-semibold text-gray text-center" href="{{ url('/diagnosticos') }}">
                Regresar
            </a>
        </button>

                <div class="card-body py-4 ">
                    <form class="grid grid-rows-2 gap-y-2 items-center" method="POST" action="/diagnosticos/crear">
                        @csrf
                        <div class="font-semibold pt-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text"
                                class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full "
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="flex items-center justify-center items-center py-4  ">
                            <button class="rounded-lg bg-blue-appac py-2 px-32" type="submit">
                                <a class="w-full text-white text-center">Crear</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


@endif

@endsection
