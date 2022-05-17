@extends('layouts.app')

@section('content')



@can('create', App\Models\User::class)

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('/editarUsuario') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$usuario['name']}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{$usuario['last_name']}}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario['email']}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Lista de usuarios:</div>
                    <table class="table table-bordered table-sm table-responsive-sm">
                        <thead class="thead-light text-center">
                        <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody id="dynamic-row" class="text-center">

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>


                                <td>
                                <a href="#">
                                    Consultar
                                </a>

                                </td>
                            </tr>


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@else

<!-- <div class="container">
<br><br><br><br><br><br>
    <h2 class="text-center">ERROR: Únicamente un administrador puede registrar nuevos usuarios en el sistema.</h2>
</div> -->




<!-- Eliminar al terminar el proyecto!!!!!!!!!! -->
@if(Auth::user()->role_id == 2)
<h1 >CONTACTA AL ADMINISTRADOR</h1>
@endif
@if(Auth::user()->role_id == 1)

<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <div class="font-blue-appac text-left text-4xl font-black">{{ __('Editar Usuario') }}</div>

                <div class="card-body">
                    <form class="grid grid-rows-11 gap-y-2 items-center" method="POST" action="{{ url('editarUsuario', $usuario['id']) }}">
                        @csrf

                        <div class="font-semibold pt-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                                name="name" value="{{$usuario['name']}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="font-semibold pt-2">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text"
                                class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                                name="last_name" value="{{$usuario['last_name']}}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="font-semibold pt-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                class="block appearance-none w-full bg-default-grey border-gray-200 placeholder-slate-400 text-slate-600 py-2 px-3 pr-8  border-2 rounded-2xl leading-tight focus:outline-none focus:border-slate-300"
                                name="email" value="{{$usuario['email']}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="w-full rounded-lg bg-blue-appac py-2 px-10; text-white text-center">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <!-- <div class="card">
                <div class="card-header">Lista de usuarios:</div>
                    <table class="table table-bordered table-sm table-responsive-sm">
                        <thead class="thead-light text-center">
                        <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                        </tr>
                        </thead>

                        <tbody id="dynamic-row" class="text-center">

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>


                                <td>
                                <a href="#">
                                    Consultar
                                </a>

                                </td>
                            </tr>


                        </tbody>

                    </table>
                </div>
            </div> -->
        </div>
    </div>
</div>


@endif
@endif

@endsection
