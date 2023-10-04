<?php

namespace App\Http\Resources\Api\Chat;

use App\Enum\Chat\ChatUsersTypeEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => (int) $this->id,
            'from_id' => (int) $this->from_id,
            'from_type' => (string) ChatUsersTypeEnum::model_value($this->from_type),
            'to_id' => (int) $this->to_id,
            'to_type' => (string) ChatUsersTypeEnum::model_value($this->to_type),
            'message_text' => (string) $this->message_text,
            'readed_at' => (string) $this->readed_at,
        ];
    }
}
