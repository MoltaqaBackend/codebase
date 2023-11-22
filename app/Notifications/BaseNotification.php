<?php

namespace App\Notifications;

use App\Events\NotificationEvent;
use App\FCMChannel\FCMChannel;
use App\Services\SendFCM;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BaseNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $notificationData;

    protected $notificationVia = ['mail', 'sms', 'firebase', 'pusher', 'database'];

    /**
     * Create a new notification instance.
     */
    public function __construct($notificationData)
    {
        $this->notificationData = $notificationData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable)
    {
        if (in_array('firebase', $this->notificationVia)) {
            $via[] = FcmChannel::class;
        }
        if (in_array('mail', $this->notificationVia)) {
            $via[] = 'mail';
        }

        if (in_array('database', $this->notificationVia)) {
            $via[] = 'database';
        }
        return $via ?? [];
    }


    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $title = json_decode(data_get($this->notificationData, 'title'), true)[app()->getLocale()] ?? __('messages.responses.notification');
        $body = json_decode(data_get($this->notificationData, 'body'), true)['data'] ?? [];
        $body = is_array($body) ? $title : $body;
        return (new MailMessage())
            ->subject($title)
            ->line($body);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        if (in_array('sms', $this->notificationVia)) {
            $this->sendToSms($notifiable);
        }

        if (in_array('pusher', $this->notificationVia)) {
            $this->sendToPusher($notifiable);
        }

        return [
            'title' => json_decode($this->notificationData['title'], true) ?? '',
            'body' => json_decode($this->notificationData['body'], true)['data'] ?? '',
            'anotherData' => json_decode($this->notificationData['body'], true)['anotherData'] ?? '',
        ];
    }


    public function sendToSms(object $notifiable)
    {
        # Note $notificationData must contain body
        sendSMS($this->notificationData['body'], $notifiable->mobile);
    }

    public function sendToPusher(object $notifiable)
    {
        # Note $notificationData must contain title , body and topic attributes
        event(new NotificationEvent($this->notificationData));
    }
}
