<?php

namespace App\Http\Requests\Api\V1\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([]);
    }

    public function rules(): array
    {
        $rules = [];
        if($this->getMethod() == "POST")
            return $this->postRules($rules);
        elseif($this->getMethod() == "PUT" || $this->getMethod() == "PATCH" )
            return $this->putPatchRules($rules);
    }

    public function attributes(): array
    {
        return [

        ];
    }

    private function postRules(array $rules): array{
        return [
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email',
            'mobile'        => 'required|phone:eg',
            'password'      => 'required|confirmed|min:8',
            'is_active'     => 'nullable|boolean',
            'role_id'       => 'required|exists:roles,id',
        ];
    }

    private function putPatchRules(array $rules): array{
        return [
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|unique:users,email,' . $this->route('user')->id,
            'mobile'        => 'required|phone:eg',
            'password'      => 'nullable|confirmed|min:8',
            'is_active'     => 'nullable|boolean',
            'role_id'       => 'required|exists:roles,id',
        ];
    }

    public function bodyParameters(): array
    {
        return scribe_fluent()
            ->parameter('is_active', 'boolean', '1')
            ->toArray();
    }
}
