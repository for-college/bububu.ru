<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function ($auth) {
  $auth->post('signup', 'signup');
  $auth->post('login', 'login');
  $auth->post('logout', 'logout')->middleware('auth:api');
});

Route::apiResource('categories', CategoryController::class);
