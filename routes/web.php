<?php

use App\Http\Controllers\Beneficiary\ListBeneficiary;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\Beneficiary\CreateBeneficiary;
use App\Http\Controllers\Beneficiary\DeleteBeneficiary;
use App\Http\Controllers\Beneficiary\NewBeneficiary;
use App\Http\Controllers\Beneficiary\ReadBeneficiary;
use App\Http\Controllers\Beneficiary\UpdateBeneficiary;


Route::get('/home', HomeController::class)->middleware('auth');

Route::get('/cons', function () {
    return view('construct');
})->middleware('auth');

Route::get('/', function () {
    return view('home');
})->middleware('auth');


Route::get('/crearUsuario', [RegistrationController::class, 'create'])->middleware('auth');

Route::post('crearUsuario', [RegistrationController::class, 'store'])->middleware('auth');

Route::resource('register',BeneficiarioController::class)->middleware('auth');
// Route::post('beneficiario', [BeneficiarioController::class, 'store']);

Route::post('/editBeneficiario/{id}', [BeneficiarioController::class, 'update'])->middleware('auth');

Route::get('/beneficiario/{beneficiario}/datos', [BeneficiarioController::class, 'getBeneficiarioData'])->middleware('auth');

Route::get('/crearBeneficiario', [BeneficiarioController::class, 'create'])->middleware('auth');

Route::get('/usuario/{id}', [UserController::class, 'getUser'])->middleware('auth');

Route::get('/beneficiarios', ListBeneficiary::class)->middleware('auth');

Route::post('/buscarBeneficiario', 'App\Http\Controllers\Beneficiary\ListBeneficiary@searchBeneficiarios');

Route::post('/buscarBeneficiarioEdad', 'App\Http\Controllers\Beneficiary\ListBeneficiary@searchBeneficiariosAge');

Route::get('/usuarios', [UserController::class, 'index']);

Route::post('/buscarUsuarios', [UserController::class, 'getUserByRol']);


Route::delete('/usuarios/{id}', [UserController::class, 'delete']);

Route::resource('register', BeneficiarioController::class);


// Route::resource('beneficiario', BeneficiarioController::class);

// Route::post('beneficiario', [BeneficiarioController::class, 'store']);

// Route::post('/editBeneficiario/{id}', [BeneficiarioController::class, 'update']);

// Route::get('/beneficiario/{beneficiario}/datos', [BeneficiarioController::class, 'getBeneficiarioData']);

// Route::post('/beneficiarios/search', ['as' => 'search-beneficiarios', 'uses' => 'App\Http\Controllers\BeneficiarioController@searchBeneficiarios']);
// Route::post('/beneficiarios/searchage', ['as' => 'search-beneficiarios-age', 'uses' => 'App\Http\Controllers\BeneficiarioController@searchBeneficiariosAge']);

Route::get('/usuario', [UserController::class, 'index']);
Route::get('/usuario/{id}', [UserController::class, 'getUser']);

Route::get('/beneficiario/new', NewBeneficiary::class);
Route::get('/beneficiarios', ListBeneficiary::class);
Route::post('/beneficiarios', CreateBeneficiary::class);
Route::get('/beneficiarios/{id}', ReadBeneficiary::class);
Route::post('/beneficiarios/{id}/delete', DeleteBeneficiary::class);
Route::get('/beneficiarios/{id}/edit', [UpdateBeneficiary::class, 'show']);
Route::post('/beneficiarios/{id}/edit', UpdateBeneficiary::class);
Route::get('/usuario/{id}/editar', [UserController::class, 'editForm']);

Route::post('editarUsuario/{id}', [UserController::class, 'editUser']);

//Route::get('/beneficiarios', ListBeneficiary::class);

