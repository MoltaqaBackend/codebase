<?php

namespace App\Http\Requests\Api\Core;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @queryParam carCategoryId integer (optional) car category identifier.Example: 3
 */
class CarCategoryRequest extends FormRequest
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
            'carCategoryId' => ['sometimes','exists:car_categories,id,status,1'],
        ];
    }

    public function attributes(): array
    {
        return [
            'carCategoryId' => __('Car Category Identifier'),
        ];
    }
}
