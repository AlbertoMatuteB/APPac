<?php

use App\Http\Controllers\Beneficiary\DeleteBeneficiaryApi;
use App\Http\Controllers\Diagnosis\DeleteDiagnosis;
use App\Http\Controllers\Diagnosis\DeleteDiagnosisApi;
use App\Http\Controllers\Evaluation\DeleteEvaluationApi;
use App\Http\Controllers\Evaluation\IndexPDFEvaluation;
use App\Http\Controllers\Users\DeleteUserApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/test', function () {
    return "pp";
});
Route::post('/diagnosticos/{id}/delete', DeleteDiagnosisApi::class);
Route::post('/evaluaciones/{id}/delete', DeleteEvaluationApi::class);
Route::post('/beneficiarios/{id}/delete', DeleteBeneficiaryApi::class);
Route::post('/usuarios/{id}/delete', DeleteUserApi::class);
Route::post('/evaluaciones/{id}/pdf', IndexPDFEvaluation::class);
