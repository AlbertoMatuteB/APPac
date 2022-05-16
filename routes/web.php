<?php

use App\Http\Controllers\Beneficiary\ListBeneficiary;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
 
Route::get('/usuario', [UserController::class, 'index'])->middleware('auth');

Route::get('/usuario/{id}', [UserController::class, 'getUser'])->middleware('auth');

Route::get('/beneficiarios', ListBeneficiary::class)->middleware('auth');