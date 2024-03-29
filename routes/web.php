<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-agent', [ServiceController::class, 'login']);




Route::get('/dash', [ServiceController::class, 'index']);
Route::get('/registerservice', [ServiceController::class, 'service']);
Route::post('/storeservice', [ServiceController::class, 'storeservice']);
Route::get('/complainstab', [ServiceController::class, 'complaints']);
Route::post('/storecomplain', [ServiceController::class, 'storecomplain']);