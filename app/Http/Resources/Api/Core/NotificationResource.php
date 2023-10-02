<?php

namespace App\Http\Resources\Api\Core;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id ?? 0,
            'title' => $this->data['title'] ?? '',
            'message' => $this->data['message'] ?? '',
            'data' => array_key_exists('data', $this->data) ? (object)$this->data['data'] : [],
            'abilility' => $this->data['abilility'] ?? '',
            'notification_topic' => $this->data['notification_topic'] ?? '',
        ];
    }
}
