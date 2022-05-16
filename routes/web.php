<?php

use App\Http\Controllers\Beneficiary\ListBeneficiary;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers;

use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\UserController;

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
})->middleware('auth');


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/crearUsuario', [RegistrationController::class, 'create'])->middleware('auth');;
Route::post('crearUsuario', [RegistrationController::class, 'store'])->middleware('auth');;



Route::resource('register',BeneficiarioController::class)->middleware('auth');


Route::resource('beneficiario',BeneficiarioController::class)->middleware('auth');

// Route::post('beneficiario', [BeneficiarioController::class, 'store']);

Route::post('/editBeneficiario/{id}', [BeneficiarioController::class, 'update'])->middleware('auth');

Route::get('/beneficiario/{beneficiario}/datos', [BeneficiarioController::class, 'getBeneficiarioData'])->middleware('auth');

Route::get('/crearBeneficiario', [BeneficiarioController::class, 'create'])->middleware('auth');





Route::post('/beneficiarios/search', ['as' => 'search-beneficiarios', 'uses' => 'App\Http\Controllers\BeneficiarioController@searchBeneficiarios'])->middleware('auth');
Route::post('/beneficiarios/searchage', ['as' => 'search-beneficiarios-age', 'uses' => 'App\Http\Controllers\BeneficiarioController@searchBeneficiariosAge'])->middleware('auth');



Route::get('/usuario', [UserController::class, 'index'])->middleware('auth');
Route::get('/usuario/{id}', [UserController::class, 'getUser'])->middleware('auth');

//Route::get('/beneficiarios', ListBeneficiary::class);

