<?php

namespace App\Http\Controllers\Api\V1\Notification;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\SendNotificationRequest;
use App\Http\Resources\Api\Notification\NotificationResource;
use App\Notifications\BaseNotification;
use App\Traits\ApiResponseTrait;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    use ApiResponseTrait;

    public function __construct()
    {
        
    }

    public function index(Request $request): mixed
    {
        $notifications = $request->unread ?  auth(activeGuard())->user()->unreadNotifications : auth(activeGuard())->user()->notifications;
        // TODO handel response
        return $this->respondWithCollection($notifications);
    }

    protected function send(SendNotificationRequest $request)
    {
        // TODO handel multi gaurd
        Notification::sendNow(User::all(),new BaseNotification());
    }
}
