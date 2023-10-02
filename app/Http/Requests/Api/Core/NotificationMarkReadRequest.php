<?php

namespace App\Http\Requests\Api\Core;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @queryParam notification_id string required notification identifier to delete.Example:dfnkjdbfkbry2383423hjk4
 */
class NotificationMarkReadRequest extends FormRequest
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
            'notification_id' => ['sometimes','exists:notifications,id']
        ];
    }

    public function attributes(): array
    {
        return [
            'notification_id' => __('Notification Identifier'),
        ];
    }
}
