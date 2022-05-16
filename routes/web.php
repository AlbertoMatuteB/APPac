<?php

use App\Http\Controllers\Beneficiary\ListBeneficiary;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/home', HomeController::class)->middleware('auth');


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/usuario/{id}', [UserController::class, 'getUser'])->middleware('auth');

Route::get('/beneficiarios', ListBeneficiary::class)->middleware('auth');

Route::post('/buscarBeneficiario', 'App\Http\Controllers\Beneficiary\ListBeneficiary@searchBeneficiarios');

Route::post('/buscarBeneficiarioEdad', 'App\Http\Controllers\Beneficiary\ListBeneficiary@searchBeneficiariosAge');
 
Route::get('/usuarios', [UserController::class, 'index']);

Route::delete('/usuarios/{id}', [UserController::class, 'delete']);


