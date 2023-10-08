<?php

namespace App\Notifications;

use App\Events\NotificationEvent;
use App\Services\SendFCM;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Foundation\Auth\User;

class BaseNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $notificationData;

    protected $notificationVia = ['mail', 'sms', 'firebase','pusher', 'database'];
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
        if (in_array('mail', $this->notificationVia)) {
            $via[] = 'mail';
        }
        if (in_array('sms', $this->notificationVia)) {
            $via[] = 'sms';
        }
        if (in_array('firebase', $this->notificationVia)) {
            $via[] = 'firebase';
        }
        if (in_array('pusher', $this->notificationVia)) {
            $via[] = 'firebase';
        }
        if (in_array('database', $this->notificationVia)) {
            $via[] = 'database';
        }
        return $via ?? [];
    }

    public function toSms(object $notifiable)
    {
        # Note $notificationData must contain body
        sendSMS($this->notificationData['body'],$notifiable->mobile);
    }

    public function toFirebase(object $notifiable)
    {
        # Note $notificationData must contain tokenModel , sendForAdmin , sendForUsers , title , body attributes
        # optional passing a notifiable model instead of User::first()
        # tokenModel ex >> User::class
        (new SendFCM($this->notificationData['tokenModel']))
            ->sendForAdmin($this->notificationData['sendForAdmin'])
            ->sendForUsers($this->notificationData['sendForUsers'])
            ->sendNotification($this->notificationData['title'],$this->notificationData['body'],User::first());
    }

     public function toPusher(object $notifiable)
     {
         # Note $notificationData must contain title , body and topic attributes
         event(new NotificationEvent($this->notificationData));
     }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => $this->notificationData['title'],
            'body' => $this->notificationData['body'],
        ];
    }
}
