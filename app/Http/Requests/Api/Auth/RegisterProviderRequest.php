<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 * @bodyParam name string required The user personal name.Example: Fahmi Moustafa
 * @bodyParam mobile string required The Mobile Number of the user.Example: 0564776688
 * @bodyParam email string (optional) The E-Mail Address of the user.Example: fahmi@moltaqa.net
 * @bodyParam national_identity string lenght[10] required The user national identity number.Example: 1234567893
 * @bodyParam nationality_id integer required the nationality id.Example: 1
 * @bodyParam dob string required user date of birth formated as Y-m-d.Example: 1990-09-30
 * @bodyParam avatar file required user personal image.
 * @bodyParam password string required The User bew password.Example: 12345678
 * @bodyParam password_confirmation string required The user new password confirmation.Example: 12345678
 * @bodyParam address string required user address.Example: jada - stret 13 - building 5
 * @bodyParam latitude number required user lattiude.Example: 31.324342744239
 * @bodyParam longitude number required userlongitude.Example: 41.37437832442
 * @bodyParam car_type_id integer required user seelcted car type id.Example: 1
 * @bodyParam car_category_id integer required user seelcted car type id.Example: 1
 * @bodyParam serial_number string required user car serial number.Example: djkjfbajkdfnlk
 * @bodyParam board_number string required user car board number.Example: Kg8f06
 * @bodyParam car_image file required user car image.
 */
class RegisterProviderRequest extends FormRequest
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
            "name" => ["required","string","max:190"],
            "mobile" => ["required","unique:users,mobile"],
            "email" => ["sometimes","unique:users,email"],
            "national_identity" => ["required","digits:10"],
            "nationality_id" => ["required","exists:nationalities,id"],
            "dob" => ["required","date","date_format:Y-m-d"],
            "avatar" => ["required","image","max:2048","mimes:png,jpg,jpeg"],
            "password" => ["required","confirmed",Password::default()],
            "address" => ["required","string","max:190"],
            "latitude" => ["required","numeric"],
            "longitude" => ["required","numeric"],
            "car_type_id" => ["required","exists:car_types,id"],
            "car_category_id" => ["required","exists:car_categories,id"],
            "serial_number" => ["required","string"],
            "board_number" => ["required","string"],
            "car_image" => ["required","image","max:2048","mimes:png,jpg,jpeg"],
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => __('Name'),
            'mobile' => __('Mobile'),
            'email' => __('E-Mail'),
            'national_identity' => __('National Identity'),
            'nationality_id' => __('Nationality Identifier'),
            'dob' => __('Date of Birth'),
            'password' => __('Password'),
            'password_confirmation' => __('Password Confirmation'),
            'address' => __('Address'),
            'latitude' => __('Latitude'),
            'longitude' => __('Longitude'),
            'car_type_id' => __('Car Type Identifier'),
            'car_category_id' => __('Car Category Identifier'),
            'serial_number' => __('Serial Number'),
            'board_number' => __('Board Number'),
            'car_image' => __('Car Image'),
        ];
    }
}
