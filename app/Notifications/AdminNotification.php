<?php

namespace App\Notifications;

class AdminNotification extends BaseNotification
{
    protected $notificationVia = ['mail','database'];
}
