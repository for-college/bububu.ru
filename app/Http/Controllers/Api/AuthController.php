<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiRequest;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
  public function register(RegisterRequest $request)
  {
    $role_user = Role::where('code', 'user')->first();
    $path = null;

    if ($request->hasFile('avatar')) {
      $path = $request->file('avatar')->store('avatars', 'public');
    }

    $user = User::create([
      ...$request->validated(), 'avatar' => $path, 'role_id' => $role_user->id
    ]);

    $user->api_token = Hash::make(Str::random(60));
    $user->save();

    return response()->json([
      'user' => $user,
      'token' => $user->api_token,
    ], 201);
  }

  public function login(ApiRequest $request)
  {
    if (!Auth::attempt($request->only('email', 'password'))) {
      throw new ApiException('Failed auth', 401);
    }

    $user = Auth::user();
    $user->api_token = Hash::make(Str::random(60));
    $user->save();

    return response()->json([
      'user' => $user,
      'token' => $user->api_token,
    ]);
  }


  public function logout(ApiRequest $request)
  {
    $user = Auth::user();
    $user->api_token = null;
    $user->save();

    return response()->json();
  }
}
