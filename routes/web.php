<?php

use App\Http\Controllers\Beneficiary\ListBeneficiary;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::post('/buscarBeneficiario', 'App\Http\Controllers\Beneficiary\ListBeneficiary@searchBeneficiarios');
Route::post('/buscarBeneficiarioEdad', 'App\Http\Controllers\Beneficiary\ListBeneficiary@searchBeneficiariosAge');

use App\Http\Controllers\UserController;
 
Route::get('/usuarios', [UserController::class, 'index']);

Route::get('/usuarios/{id}', [UserController::class, 'getUser']);

Route::delete('/usuarios/{id}', [UserController::class, 'delete']);

Route::get('/beneficiarios', ListBeneficiary::class);