<?php

namespace App\Http\Requests\Api\AppProvider\Home;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam order_id integer required order identifier.Example: 2
 * @bodyParam price numeric required order offer price.Example: 50
 */
class StoreOrderPriceOfferRequest extends FormRequest
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
            'order_id' => ['required','exists:orders,id,deleted_at,NULL,declined_at,NULL,delivered_at,NULL,accepted_at,NULL'],
            'price' => ['required','numeric'],
        ];
    }

    public function attributes(): array
    {
        return [
            'order_id' => __('Order Identifier'),
            'price' => __('Price'),
        ];
    }
}
