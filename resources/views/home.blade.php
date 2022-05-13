@extends('layouts.app')
@section('content')

<div class="h-full menu-grid content-center justify-center gap-12 px-10 py-10">
    <a href="/beneficiarios"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            school
        </span>
        <span class="font-blue-appac font-semibold">Beneficiarios</span>
    </a>
    <a href="/beneficiarios"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            leaderboard
        </span>
        <span class="font-blue-appac font-semibold">Evaluaciones</span>
    </a>

    <a href="/beneficiarios"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            summarize
        </span>
        <span class="font-blue-appac font-semibold">Diagnóstico</span>
    </a>

    <a href="/usuario"
        class="flex flex-col items-center justify-center bg-white w-full h-full rounded-lg shadow-md hover:shadow-lg">
        <span class="material-icons material-icons-outlined  font-blue-appac menu-icon-size">
            group
        </span>
        <span class="font-blue-appac font-semibold">Usuarios</span>
    </a>
</div>



@endsection
