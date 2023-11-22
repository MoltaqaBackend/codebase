<?php

namespace App\Notifications;

class ProviderNotification extends BaseNotification
{
    public function __construct($notificationData, $notificationVia = ['firebase', 'database'])
    {
        $this->notificationVia = $notificationVia;
        parent::__construct($notificationData);
    }
}
