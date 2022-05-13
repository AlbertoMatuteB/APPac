<?php

use App\Http\Controllers\Beneficiary\ListBeneficiary;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers;


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

Route::get('/usuarios/registrar', [RegistrationController::class, 'create']);
Route::post('crearUsuario', [RegistrationController::class, 'store']);

use App\Http\Controllers\UserController;

Route::get('/usuario', [UserController::class, 'index']);

Route::get('/usuario/{id}', [UserController::class, 'getUser']);

Route::get('/usuario/{id}/editar', [UserController::class, 'editForm']);

Route::post('editarUsuario/{id}', [UserController::class, 'editUser']);

//Route::get('/beneficiarios', ListBeneficiary::class);

