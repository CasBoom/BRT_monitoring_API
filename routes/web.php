<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttributeController;
use App\Http\Controllers\TokenController;


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

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/tokens', function () {
    return view('tokens');
})->middleware('auth');

Route::get('/login', ['as' => 'login','uses'=> function () {
    return view('login');
}]);

Route::get('/profile', function() {
    return view('profile');
})->middleware('auth');

Route::get('/attribute', [function () {
    return view('attribute');
}])->middleware('auth');;

// Route::get('/value', [AttributeController::class, 'create'])->middleware('auth');
Route::get('/value', [function () {
    return view('value');
}])->middleware('auth');;

//functions
Route::get('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);
Route::post('/reset_password', [UserController::class, 'resetPassword'])->middleware('auth');
Route::post('/attribute', [AttributeController::class, 'create'])->middleware('auth');
Route::get('/attribute/delete/{id}', [AttributeController::class,'delete'])->middleware('auth');
Route::post('/tokens', [TokenController::class, 'create'])->middleware('auth');
Route::get('/tokens/delete/{id}', [TokenController::class,'delete'])->middleware('auth');
