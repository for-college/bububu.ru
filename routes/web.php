<?php

use App\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::controller(AuthController::class)->group(function () {
  Route::view('login', 'auth.login');
  Route::post('login', 'login')->name('login');

  Route::view('register', 'auth.register');
  Route::post('register', 'register')->name('register');

  Route::get('logout', 'logout')->middleware('auth:web');
});
