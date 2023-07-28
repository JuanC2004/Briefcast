<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "name"     =>"string|min:4|max:255",
            "email"    =>"email|max:255",
            "password" =>"min:7|max:255",
        ];
    }

    public function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json($validator->errors(),
   422));
    }
}
