<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->middleware('admin')->name('dashboard');

Route::get('/dashboard/insert', [DashboardController::class, 'insert'])->middleware('auth')->middleware('admin')->name('dashboard');

Route::POST('/dashboard/insert', [DashboardController::class, 'addAll'])->middleware('auth')->middleware('admin')->name('dashboard');

Route::get('/home', function () {
    return "home";
})->middleware('auth')->name('home');
