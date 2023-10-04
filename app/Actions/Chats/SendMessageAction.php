<?php

namespace App\Actions\Chats;

use App\Events\ChatEvent;
use App\Models\Chat;
use Illuminate\Foundation\Auth\User;

class SendMessageAction
{
    public function handle(
        Chat $chat,
        User $from,
        User $to,
        string $messageText,
        array $images,
        $toType)
    {
        $message = $chat->messages()->create([
            'message_text' => $messageText,
            'from_id' => $from->id,
            'from_type' => $from::class,
            'to_id' => $to->id,
            'to_type' => $to::class,
        ]);

        # uploadImage($message, $images, 'message_images');

        $chat->update([
            'last_message_id' => $message->id,
        ]);

        event(new ChatEvent($chat, $message, $toType));

        return $message;
    }
}
