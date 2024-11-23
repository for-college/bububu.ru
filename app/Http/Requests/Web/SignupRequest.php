<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
  public function rules(): array
  {
    return [
      'surname' => 'required|string|min:2|max:32',
      'name' => 'required|string|min:2|max:32',
      'patronymic' => 'nullable|string|min:2|max:32',
      'sex' => 'required|boolean',
      'birthday' => 'required|date',
      'email' => 'required|string|email|max:255|unique:users',
      'phone' => 'nullable|string|min:2|max:32|unique:users',
      'nickname' => 'required|string|min:2|max:32|unique:users',
      'password' => 'required|string|min:8|max:255|confirmed',
      'avatar' => 'nullable|file|mimes:jpeg,png,jpg|max:4096',
    ];
  }

  public function messages(): array
  {
    return [
      'required' => "Обязательно для заполнения",
      'email' => "Должно быть валидным email'ом",
      'string' => "Должно быть строкой",
      'date' => "Должно быть датой",
      'file' => "должно быть файлом",
      'min' => "Должно быть не меньше чем :min",
      'max' => "Должно быть не больше чем :max",
      'unique' => "Это значение уже используется",
      'mimes' => "Должно иметь следующие mimes: :values",
      'confirmed' => "Поля не совпадают",
    ];
  }
}
