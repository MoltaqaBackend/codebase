<?php

namespace App\Http\Requests\Api\Core;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @queryParam carTypeId integer (optional) car type identifier.Example: 1
 */
class CarTypeRequest extends FormRequest
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
            'carTypeId' => ['sometimes','exists:car_types,id,status,1'],
        ];
    }

    public function attributes(): array
    {
        return [
            'carTypeId' => __('Car Type Identifier'),
        ];
    }
}
