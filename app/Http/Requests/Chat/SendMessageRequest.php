<?php

namespace App\Http\Requests\Chat;

use App\Enum\Chat\ChatUsersTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Validation\Rule;

class SendMessageRequest extends FormRequest
{
    use ValidatesRequests;

    public function rules()
    {
        return [
            'to_type' => ['required', Rule::in(ChatUsersTypeEnum::toValues())],
            'to_id' => ['required'],
            'message' => ['required'],
            'images' => ['nullable', 'array'],
        ];
    }

    public function messagesAction(): array
    {
        return [];
    }
}
