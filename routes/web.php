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

Route::get('/beneficiarios', ListBeneficiary::class);

Route::post('/beneficiarios/search', ['as' => 'search-beneficiarios', 'uses' => 'App\Http\Controllers\BeneficiaryController@searchBeneficiarios']);
Route::post('/beneficiarios/searchage', ['as' => 'search-beneficiarios-age', 'uses' => 'App\Http\Controllers\BeneficiaryController@searchBeneficiariosAge']);