<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
  public function rules(): array
  {
    return [
      'surname' => 'required|string|min:2|max:32',
      'name' => 'required|string|min:2|max:32',
      'patronymic' => 'string|nullable|min:2|max:32',
      'avatar' => 'nullable|mimes:jpeg,jpg,png,svg|max:4096',
      'sex' => 'required|boolean',
      'password' => 'required|string|min:6|confirmed',
      'phone' => 'nullable|string|unique:users|min:10|max:16',
      'birthday' => 'required|date',
      'email' => 'required|email|unique:users',
      'nickname' => 'required|string|max:32|unique:users',
    ];
  }
}
