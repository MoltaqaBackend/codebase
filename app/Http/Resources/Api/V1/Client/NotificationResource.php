<?php

namespace App\Http\Resources\Api\V1\Client;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->data['title'][get_current_lang()] ?? '--',
            'body' => $this->data['body'][get_current_lang()] ?? '--',
            'redirect_id' => $this->data['id'] ?? null,
            'type' => $this->data['type'] ?? '--',
            'notifiable' => $this->notifiable,
        ];
    }
}
