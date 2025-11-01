<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
});
Route::get('register',[RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('register',[RegisterController::class,'register']);

Route::get('login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout'])->name('logout');


Route::middleware('auth')->group(function(){
    Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard');

    Route::middleware('role:admin')->group(function(){
        Route::resource('users', UserController::class);
    });
});
