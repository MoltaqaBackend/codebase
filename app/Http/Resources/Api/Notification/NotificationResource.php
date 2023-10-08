<?php

namespace App\Http\Resources\Api\Notification;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'data' => $this->data,
            'notifiable' => $this->notifiable,
        ];
    }
}
