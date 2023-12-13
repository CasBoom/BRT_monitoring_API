<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login', ['as' => 'login','uses'=> function () {
    return view('login');
}]);

//functions
Route::get('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);
Route::post('/reset_password', [UserController::class, 'resetPassword'])->middleware('auth');