<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function register(RegisterRequest $request)
  {
    $role_user = Role::where('code', 'user')->first();
    $path = null;

    if ($request->hasFile('avatar')) {
      $path = $request->file('avatar')->store('avatars', 'public');
    }

    User::create([
      ...$request->validated(), 'avatar' => $path, 'role_id' => $role_user->id
    ]);

    return redirect()->route('home');
  }

  public function login(Request $request)
  {
    if (!Auth::attempt($request->only('email', 'password'))) {
      return back()->withErrors(['error' => 'Неправильный логин или пароль']);
    }

    $request->session()->regenerate();
    return redirect()->route('home');
  }


  public function logout()
  {
    Auth::logout();

    return redirect()->route('home');
  }
}
