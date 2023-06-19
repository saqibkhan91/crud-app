<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/register', 'register');
Route::post('/register', [usersController::class,'testRequest']);
Route::get('/', [usersController::class,'list']);
Route::get('/delete/{id}', [usersController::class,'delete']);
Route::get('/edit/{id}', [usersController::class,'showData']);
Route::post('/edit', [usersController::class,'editData']);
