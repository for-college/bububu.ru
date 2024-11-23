<?php

namespace App\Http\Requests\Api;

class CategoryRequest extends ApiRequest
{
  public function rules(): array
  {
    return [
      'name' => 'required|string|min:2|max:64|unique:categories',
    ];
  }

  public function messages(): array
  {
    return [
      'required' => "Обязательно для заполнения",
      'string' => "Должно быть строкой",
      'min' => "Должно быть не меньше чем :min",
      'max' => "Должно быть не больше чем :max",
      'unique' => "Это значение уже используется",
    ];
  }
}
