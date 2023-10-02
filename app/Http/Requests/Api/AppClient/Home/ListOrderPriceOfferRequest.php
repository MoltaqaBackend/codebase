<?php

namespace App\Http\Requests\Api\AppClient\Home;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @queryParam order_id integer required the order identitfer .Example: 4 
 */
class ListOrderPriceOfferRequest extends FormRequest
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
            'order_id' => ['sometimes','exists:orders,id']
        ];
    }

    public function attributes(): array
    {
        return [
            'order_id' => __('Order Identifier'),
        ];
    }
}
