<?php

namespace App\Http\Requests\Api\Auth;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam title string required Notification title.Example: title
 * @bodyParam message string required Notification Message.Example: message
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
        return [
            'title' => ['required', 'string'],
            'message' => ['required', 'string'],
            'roles' => ['required','array','min:1'],
            'roles.*' => ['required','in:'.Role::pluck('name')->toArray()],
            'users' => ['nullable','array'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => __('Title'),
            'message' => __('Message'),
        ];
    }
}
