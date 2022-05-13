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

Route::get('/registerUser', [UserController::class, 'create']);

Route::post('/registerUser', [UserController::class, 'store'])->name('register');

Route::get('/beneficiarios', ListBeneficiary::class);

Route::get('/crearUsuario', [RegistrationController::class, 'create']);
Route::post('crearUsuario', [RegistrationController::class, 'store']);


