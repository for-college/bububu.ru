<?php

use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\CategoryController;
use Illuminate\Support\Facades\Route;

Route::view('', 'home')->name('home');

Route
  ::controller(AuthController::class)
  ->group(function ($auth) {
    $auth->view('signup', 'auth.signup')->name('signupForm');
    $auth->post('signup', 'signup')->name('signup');
    $auth->view('login', 'auth.login')->name('loginForm');
    $auth->post('login', 'login')->name('login');
    $auth->get('logout', 'logout')->middleware('auth:web')->name('logout');
  });

Route::resource('categories', CategoryController::class);
