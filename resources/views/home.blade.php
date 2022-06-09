@extends('layouts.app')
@section('content')

<div class="h-full menu-grid content-center justify-center gap-12 px-10 pt-28 pb-6">
    <a href="/beneficiarios"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            school
        </span>
        <span class="font-blue-appac font-semibold text-3xl">Beneficiarios</span>
    </a>
    <a href="/evaluaciones"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            leaderboard
        </span>
        <span class="font-blue-appac font-semibold text-3xl">Evaluaciones</span>
    </a>
    @if(Auth::user()->role_id == 1)
    <a href="/diagnosticos"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            summarize
        </span>
        <span class="font-blue-appac font-semibold text-3xl">Diagnóstico</span>
    </a>
    @endif
    @if(Auth::user()->role_id == 1)
    <a href="/usuarios"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            group
        </span>
        <span class="font-blue-appac font-semibold text-3xl">Usuarios</span>
    </a>
    @endif
</div>



@endsection
