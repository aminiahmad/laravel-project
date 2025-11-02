<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.submit');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('user/dashboard', fn() => view('user.dashboard'))->name('userDashboard');

Route::get('admin/dashboard', function () {
    $admin = Auth::user();
    return view('admin.dashboard', compact('admin'));
})->middleware('auth')->name('adminDashboard');

Route::middleware('role:admin')->group(function () {
    Route::resource('users', UserController::class);
});
