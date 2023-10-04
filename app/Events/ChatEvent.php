<?php

namespace App\Events;

use App\Enum\Chat\ChatUsersTypeEnum;
use App\Http\Resources\Api\Chat\ChatResource;
use App\Http\Resources\Api\Chat\MessageResource;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public mixed $message;

    public $chat;

    public string $toType;
    /**
     * Create a new event instance.
     */
    public function __construct($chat, $message, $toType)
    {
        $this->chat = $chat;
        $this->message = $message;
        $this->toType = $toType;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('chat.'.$this->getAuthorizedUserId($this->toType));
    }

    private function getAuthorizedUserId($type){
        return match ($type) {
            ChatUsersTypeEnum::User => $this->chat->user_id,
            ChatUsersTypeEnum::Provider => $this->chat->provider_id,
            ChatUsersTypeEnum::Driver => $this->chat->driver_id,
            default => 0,
        };
    }

    public function broadcastAs()
    {
        return 'new_chat';
    }

    public function broadcastWith()
    {
        return [
            'message' => MessageResource::make($this->message),
            'chat' => ChatResource::make($this->chat),
        ];
    }
}
