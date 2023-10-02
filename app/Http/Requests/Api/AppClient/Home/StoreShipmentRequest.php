<?php

namespace App\Http\Requests\Api\AppClient\Home;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam source_address srting required source location address.Example: jada , street 15
 * @bodyParam source_latitude numeric required source location latitude.Example: 31.2384238384782
 * @bodyParam source_longitude numeric required source location longitude.Example: 43.26543254625
 * @bodyParam destination_address srting required destination location address.Example: jada , street 40
 * @bodyParam destination_latitude numeric required destination location latitude.Example: 31.2384238384782
 * @bodyParam destination_longitude numeric required destination location longitude.Example: 43.2384238384782
 * @bodyParam loaded_at srting required load shipment date.Example: 2023-10-15 04:30:00
 * @bodyParam car_type_id interger required car type idntifier.Example: 1
 * @bodyParam car_category_id integer required car category idntifier.Example: 1
 * @bodyParam shipment_type_id integer required shipment type idntifier.Example: 1
 * @bodyParam shipment_sub_type_id integer required shipment sub type idntifier.Example: 1
 * @bodyParam length numeric required shipment length.Example: 60
 * @bodyParam width numeric required shipment width.Example: 70
 * @bodyParam height numeric required shipment height.Example: 90
 * @bodyParam weight numeric required shipment weight.Example: 112
 * @bodyParam description srting required shipment description.Example: shipment description
 * @bodyParam image file required.
 */
class StoreShipmentRequest extends FormRequest
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
     * @return array<string => ['required',''], \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'source_address' => ['required','string','max:190'],
            'source_latitude' => ['required','numeric'],
            'source_longitude' => ['required','numeric'],
            'destination_address' => ['required','string','max:190'],
            'destination_latitude' => ['required','numeric'],
            'destination_longitude' => ['required','numeric'],
            'loaded_at' => ['required','date'],
            'car_type_id' => ['required','exists:car_types,id,status,1'],
            'car_category_id' => ['required','exists:car_categories,id,status,1'],
            'shipment_type_id' => ['required','exists:shipment_types,id,status,1'],
            'shipment_sub_type_id' => ['required','exists:shipment_sub_types,id,status,1'],
            'length' => ['required','numeric'],
            'width' => ['required','numeric'],
            'height' => ['required','numeric'],
            'weight' => ['required','numeric'],
            'description' => ['required','string','max:1000'],
            'image' => ['required','image','mimes:png,jpg,jpeg','max:2048'],
        ];
    }

    public function attributes(): array
    {
        return [
            'source_address' => __('Source Address'),
            'source_latitude' => __('Source Latitude'),
            'source_longitude' => __('Source Longitude'),
            'destination_address' => __('Destination Address'),
            'destination_latitude' => __('Destination Latitude'),
            'destination_longitude' => __('Destination Longitude'),
            'loaded_at' => __('Loaded At'),
            'car_type_id' => __('Car Type Identifer'),
            'car_category_id' => __('Car Category Identifier'),
            'shipment_type_id' => __('Shipment Type Identifier'),
            'shipment_sub_type_id' => __('Shipment Sub-Type Identifier'),
            'length' => __('Length'),
            'width' => __('Width'),
            'height' => __('Height'),
            'weight' => __('Weight'),
            'description' => __('Description'),
            'image' => __('Image'),
        ];
    }
}