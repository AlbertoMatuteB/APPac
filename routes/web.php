<?php

use App\Http\Controllers\Beneficiary\ListBeneficiary;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Beneficiary\BeneficiarioController;
use App\Http\Controllers\Beneficiary\CreateBeneficiary;
use App\Http\Controllers\Beneficiary\DeleteBeneficiary;
use App\Http\Controllers\Beneficiary\NewBeneficiary;
use App\Http\Controllers\Beneficiary\ReadBeneficiary;
use App\Http\Controllers\Beneficiary\SearchBeneficiary;
use App\Http\Controllers\Beneficiary\SearchBeneficiaryByAge;
use App\Http\Controllers\Beneficiary\SearchBeneficiaryByDiagnostic;
use App\Http\Controllers\Beneficiary\UpdateBeneficiary;
use App\Http\Controllers\Diagnosis\ListDiagnosis;
use App\Http\Controllers\Diagnosis\NewDiagnosis;
use App\Http\Controllers\Diagnosis\CreateDiagnosis;
use App\Http\Controllers\Diagnosis\DeleteDiagnosis;
use App\Http\Controllers\Evaluation\ListEvaluation;

Route::get('/home', HomeController::class)->middleware('auth');

Route::get('/cons', function () {
    return view('construct');
})->middleware('auth');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/usuarios', [UserController::class, 'index']);
    Route::post('/buscarUsuarios', [UserController::class, 'getUserByRol']);
    Route::delete('/usuarios/{id}', [UserController::class, 'delete']);
    Route::get('/usuario', [UserController::class, 'index']);
    Route::get('/usuario/{id}/editar', [UserController::class, 'editForm']);
    Route::post('editarUsuario/{id}', [UserController::class, 'editUser']);
    Route::get('/usuario/{id}', [UserController::class, 'getUser']);
    Route::get('/usuario/{id}/editar', [UserController::class, 'editForm']);
    Route::post('editarUsuario/{id}', [UserController::class, 'editUser']);
    Route::delete('/usuarios/{id}', [UserController::class, 'delete']);
    Route::get('/usuario/{id}', [UserController::class, 'getUser']);
    Route::get('/usuarios', [UserController::class, 'index']);
    Route::get('/usuario', [UserController::class, 'index']);
    Route::get('/usuario/{id}', [UserController::class, 'getUser']);
    Route::get('/crearUsuario', [RegistrationController::class, 'create']);
    Route::post('crearUsuario', [RegistrationController::class, 'store']);
    Route::post('/buscarUsuarios', [UserController::class, 'getUserByRol']);


    Route::get('/beneficiarios', ListBeneficiary::class);
    Route::post('/beneficiarios', CreateBeneficiary::class);
    Route::get('/beneficiario/new', NewBeneficiary::class);
    Route::get('/beneficiarios/{id}', ReadBeneficiary::class);
    Route::post('/beneficiarios/{id}/delete', DeleteBeneficiary::class);
    Route::get('/beneficiarios/{id}/edit', [UpdateBeneficiary::class, 'show']);
    Route::post('/beneficiarios/{id}/edit', UpdateBeneficiary::class);
    Route::post('/beneficiarios/search', SearchBeneficiary::class);
    Route::post('/beneficiarios/search/age', SearchBeneficiaryByAge::class);
    Route::post('/beneficiarios/search/diagnostic', SearchBeneficiaryByDiagnostic::class);

    Route::get('/diagnosticos', ListDiagnosis::class);
    Route::post('/diagnosticos/{id}/delete', DeleteDiagnosis::class);
    Route::get('/diagnosticos/nuevo', NewDiagnosis::class);
    Route::post('/diagnosticos/crear', CreateDiagnosis::class);

    Route::get('/evaluaciones', ListEvaluation::class);
});
