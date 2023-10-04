<?php

namespace App\Http\Requests\Dashboard;

use App\Rules\RoleBodyRule;
use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => [
                'required',
                'unique:roles,name,' .$this->route('role')->id,
                'min:1',
                'max:250',
                new RoleBodyRule()
            ],
        ];
    }
}
