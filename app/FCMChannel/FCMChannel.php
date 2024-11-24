<?php

namespace App\FCMChannel;

use App\Services\SendFCM;
use Illuminate\Notifications\Notification;

class FCMChannel
{
    /**
     * @throws \Throwable
     */
    public function send($notifiable, Notification $notification)
    {
        $notificationData = $notification->toArray($notifiable);

        throw_if(!isset($notificationData['title'][get_current_lang()]) ||
            !isset($notificationData['body'][get_current_lang()]),
            'body and title must be presented (FIREBASE)' . ' at ' . __FILE__ . ' line ' . __LINE__);

        (new SendFCM())
            ->sendNotification(
                notifiable: $notifiable,
                title: $notificationData['title'],
                body: $notificationData['body'],
                id: $notificationData['id'],
                type: $notificationData['type']
            );
    }
}
