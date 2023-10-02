<?php

namespace App\Http\Requests\Api\Core;

use Illuminate\Foundation\Http\FormRequest;


/**
 * @queryParam nationalityId integer (optional) nationality id.Example: 1
 */
class NationalityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nationalityId' => ['sometimes', "exists:nationalities,id"],
        ];
    }

    public function attributes(): array
    {
        return [
            'nationalityId' => __('Nationality Identifier'),
        ];
    }
}
