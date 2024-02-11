<?php

namespace App\Notifications;

use App\Events\NotificationEvent;
use App\FCMChannel\FCMChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
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
        $this->chackNotificationDataIsValid();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     * @throws \Throwable
     */
    public function via($notifiable)
    {
        throw_if(!is_array($this->notificationVia),
            'Notification via must be an array' . ' at ' . __FILE__ . ' line ' . __LINE__);

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
        throw_if(!isset(json_decode($this->notificationData['title'], true)[get_current_lang()]) ||
            !isset(json_decode($this->notificationData['body'], true)[get_current_lang()]),
            'body and title must be presented (MAIL)' . ' at ' . __FILE__ . ' line ' . __LINE__);

        $title = json_decode(data_get($this->notificationData, 'title'), true)[app()->getLocale()] ?? __('messages.responses.notification');
        $body = json_decode(data_get($this->notificationData, 'body'), true)[app()->getLocale()] ?? [];

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
            'title' => json_decode($this->notificationData['title'], true),
            'body' => json_decode($this->notificationData['body'], true),
            'id' => $this->notificationData['id'],
            'type' => $this->notificationData['type'],
        ];
    }


    public function sendToSms(object $notifiable)
    {

        throw_if(!isset(json_decode($this->notificationData['body'], true)[get_current_lang()]) || !$notifiable->mobile,
            'body and notifiable mobile must be presented (SMS)' . ' at ' . __FILE__ . ' line ' . __LINE__);

        sendSMS(
            message: json_decode($this->notificationData['body'], true)[get_current_lang()] ?? '--',
            mobile: $notifiable->mobile
        );
    }

    public function sendToPusher(object $notifiable)
    {
        # Note $notificationData must contain title , body and topic attributes
        event(new NotificationEvent($this->notificationData));
    }

    private function chackNotificationDataIsValid()
    {
        throw_if(
            !isset(json_decode($this->notificationData['title'],true)[get_current_lang()]) ||
            !isset(json_decode($this->notificationData['body'],true)[get_current_lang()]) ||
            !array_key_exists('id',$this->notificationData) ||
            !isset($this->notificationData['type']),
            'notification data not valid (title,body,id,type)' . ' at ' . __FILE__ . ' line ' . __LINE__);

    }
}
