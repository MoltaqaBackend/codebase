<?php

namespace App\Notifications;

use App\Events\NotificationEvent;
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
        if (in_array('sms', $this->notificationVia)) {
            $this->sendToSms($notifiable);
        }
        if (in_array('firebase', $this->notificationVia)) {
            $this->sendToFireBase($notifiable);
        }
        if (in_array('pusher', $this->notificationVia)) {
            $this->sendToPusher($notifiable);
        }

        return [
            'title' => $this->notificationData['title'],
            'body' => $this->notificationData['body'],
        ];
    }

    
    public function sendToSms(object $notifiable)
    {
        # Note $notificationData must contain body
        sendSMS($this->notificationData['body'],$notifiable->mobile);
    }

    public function sendToFireBase(object $notifiable)
    {
        # Note $notificationData must contain tokenModel , sendForAdmin , sendForUsers , title , body attributes
        # optional passing a notifiable model instead of User::first()
        # tokenModel ex >> User::class
        (new SendFCM($this->notificationData['tokenModel']))
            ->sendForAdmin($this->notificationData['sendForAdmin'] ?? false)
            ->sendForUsers($this->notificationData['sendForUsers'] ?? false)
            ->sendNotification($this->notificationData['title'],$this->notificationData['body'],User::first());
    }

     public function sendToPusher(object $notifiable)
     {
         # Note $notificationData must contain title , body and topic attributes
         event(new NotificationEvent($this->notificationData));
     }
}
