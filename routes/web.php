<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', function () {
    return "dashboard";
})->middleware('auth')->middleware('admin')->name('dashboard');

Route::get('/home', function () {
    return "home";
})->middleware('auth')->name('home');
