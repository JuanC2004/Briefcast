<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;


class CategoryStoreRequest extends FormRequest
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
            "name" => "required|string|min:4",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            $validator->errors(),
            422
        ));
    }
}
