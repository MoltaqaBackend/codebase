<?php

namespace App\Http\Requests\Api\AppProvider\Home;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @queryParam type string required value in accepted or processing.Example: accepted
 */
class ListOrderRequest extends FormRequest
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
            'type' => ['required','in:accepted,processing',],
        ];
    }

    public function attributes(): array
    {
        return [
            'type' => __('Type'),
        ];
    }
}
