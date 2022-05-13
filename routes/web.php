<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use app\Http\Controllers\RegistrationController;
use app\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/crearUsuario', [RegistrationController::class, 'create']);
Route::post('crearUsuario', [RegistrationController::class, 'store']);


