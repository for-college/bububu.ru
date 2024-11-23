<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SignupRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
  public function signup(SignupRequest $request)
  {
    if ($request->hasFile('avatar'))
      $path = $request
        ->file('avatar')
        ->store('avatars', 'public');

    $user = User::create([
      ...$request->validated(),
      'role_id' => Role::firstOrCreate(['code' => 'user'])->id,
      'avatar' => $path ?? null,
      'api_token' => Str::random(60),
    ]);

    return response([
      'token' => $user->api_token,
      'user' => $user,
    ], 201);
  }

  public function login(Request $request)
  {
    if (!Auth::attempt($request->only('email', 'password')))
      throw new ApiException(401, 'Unauthorized');

    $user = Auth::user();
    if (!$user->api_token)
      $user->update(['api_token' => Str::random(60)]);

    return response([
      'token' => $user->api_token,
      'user' => $user,
    ]);
  }

  public function logout()
  {
    Auth::user()->update(['api_token' => null]);
    return response(null, 204);
  }
}
