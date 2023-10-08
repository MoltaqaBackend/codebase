<?php

namespace App\Notifications;

class ProviderNotification extends BaseNotification
{
    protected $notificationVia = ['firebase','database'];
}
