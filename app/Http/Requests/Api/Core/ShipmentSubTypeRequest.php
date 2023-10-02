<?php

namespace App\Http\Requests\Api\Core;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @queryParam shipmentSubTypeId integer (optional) shipment sub type identifier.Example: 4
 */
class ShipmentSubTypeRequest extends FormRequest
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
            'shipmentSubTypeId' => ['sometimes','exists:shipment_sub_types,id,status,1']
        ];
    }
}
