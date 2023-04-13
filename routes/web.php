<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\UserController;
Route::get('/', function ()
{
    return view('users');
});
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::get('logout', [UserController::class, 'logout'])->name('users.logout');
