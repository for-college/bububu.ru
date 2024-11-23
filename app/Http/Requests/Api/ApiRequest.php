<?php

namespace App\Http\Requests\Api;

use App\Exceptions\ApiException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class ApiRequest extends FormRequest
{
  public function failedAuthorization()
  {
    throw new ApiException(403, 'Forbidden');
  }

  public function failedValidation(Validator $validator)
  {
    throw new ApiException(422, 'Unprocessable Content', $validator->errors());
  }
}
