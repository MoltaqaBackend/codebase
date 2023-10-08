<?php

namespace App\Notifications;

class ClientNotification extends BaseNotification
{
    protected $notificationVia = ['firebase','database'];
}
