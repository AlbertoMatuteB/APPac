@extends('layouts.app')

@section('content')

<div class="h-screen">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white max-w-xl w-full space-y-10 px-14 py-20 rounded-lg shadow-md">
            <div>
                <h2 class="font-blue-appac text-center text-xl font-semibold">Bienvenido</h2>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
                @csrf
                <input type="hidden" name="remember" value="true">

                <div class="relative flex w-full flex-wrap items-stretch">
                    <span
                        class="z-10 h-full leading-snug font-normal absolute text-center text-slate-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </span>
                    <input id="email" name="email" type="email" placeholder="Correo electronico"
                        value="{{ old('email') }}" required autocomplete="email"
                        class="px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-transparent text-base border-b-2  outline-none focus:border-black w-full pl-10" />
                    @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>Asegurate de ingresar credenciales correctos</strong>
                    </span>
                    @enderror
                </div>
                <div class="relative flex w-full flex-wrap items-stretch">
                    <span
                        class="z-10 h-full leading-snug font-normal absolute text-center text-slate-300 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-2 py-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </span>
                    <input id="password" name="password" type="password" placeholder="Contraseña"
                        class="mb-5 px-3 py-3 placeholder-slate-300 text-slate-600 relative bg-transparent text-base border-b-2  outline-none focus:border-black w-full pl-10" />
                    @error('password')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                {{-- <div class="flex items-center justify-center">
                    <div class="flex items-center">
                        <input id="remember-me" name="remember" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}
                            class="h-4 w-4 text-slate-300 focus:ring-indigo-500 border-slate-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-slate-300">{{ __('Remember Me') }}</label>
                    </div>
                </div> --}}

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center p-4 text-xl font-bold rounded-lg text-white bg-blue-appac hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
@endsection
