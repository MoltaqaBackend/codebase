<?php

namespace App\Http\Requests\Api\Notification;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @bodyParam title string required Notification title.Example: title
 * @bodyParam body string required Notification Message.Example: message
 * @bodyParam topic string (optional) Notification Topic.Example: offer
 * @bodyParam roles [] string required.Example: ['all','admin']
 * @bodyParam users [] integer required.Example: [1,2]
 */
class SendNotificationRequest extends FormRequest
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
        $roles = Role::pluck('name')->toArray();
        array_push($roles, 'all');
        return [
            'title' => ['required', 'string'],
            'body' => ['required', 'string'],
            'topic' => ['nullable','string'],
            'roles' => ['required', 'array', 'min:1'],
            'roles.*' => ['required', Rule::in($roles)],
            'users' => ['nullable', 'array'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => __('Title'),
            'body' => __('Message'),
            'topic' => __('Topic'),
            'roles' => __('User Roles'),
            'users' => __('Users'),
        ];
    }
}
