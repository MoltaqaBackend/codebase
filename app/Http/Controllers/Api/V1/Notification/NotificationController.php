<?php

namespace App\Http\Controllers\Api\V1\Notification;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Notification\SendNotificationRequest;
use App\Http\Resources\Api\Notification\NotificationResource;
use App\Models\User as UserModel;
use App\Notifications\AdminNotification;
use App\Notifications\BaseNotification;
use App\Notifications\ClientNotification;
use App\Traits\ApiResponseTrait;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

/**
 * @group Base Notification
 *
 * @subgroup Notification
 * @subgroupDescription Notification Apis
 */
class NotificationController extends Controller
{
    use ApiResponseTrait;

    protected mixed $modelResource = NotificationResource::class;

    public function __construct()
    {
        $this->middleware(['role_or_permission:notification index|'.activeGuard()])->only(['__invoke', 'index']);
        $this->middleware(['role_or_permission:notification create|'.activeGuard()])->only('store');
    }


    /**
     * List Notification
     *
     * an API which Offers a mean to list notifications
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     *
     * @queryParam unread bool reqired.Example: false
     */
    public function index(Request $request): mixed
    {
        $request->validate(['unread' => 'nullable|boolean']);
        $notifications = auth(activeGuard())->user()->notifications;

        if(isset($request->unread)) {
            $notifications = auth(activeGuard())->user()->unreadNotifications;
        }

        return $this->respondWithCollection(NotificationResource::collection($notifications));
    }

    /**
     * List Notification
     *
     * an API which Offers a mean to list notifications
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    protected function store(SendNotificationRequest $request)
    {
        $notificationData = [
            'title' => $request->title,
            'body' => $request->body,
            'topic' => $request->title,
        ];

        foreach ($request->roles as $role) {
            switch ($role) {
                case 'all':
                    $notificationData['tokenModel'] = User::class;
                    $notificationData['sendForAdmin'] = true;
                    $notificationData['sendForUsers'] = true;
                    Notification::send(User::all(), new BaseNotification($notificationData));
                    break;
                case 'admin':
                    Notification::send(UserModel::whereHas("roles", function ($q) { $q->whereIn("name", ["admin"]); })->get(), new AdminNotification($notificationData));
                    break;
                case 'client':
                    $notificationData['tokenModel'] = UserModel::class;
                    $notificationData['sendForUsers'] = true;
                    Notification::send(UserModel::whereHas("roles", function ($q) { $q->whereIn("name", ["client"]); })->get(), new ClientNotification($notificationData));
                    break;
                default:
                    break;
            }
        }

        return $this->respondWithSuccess(__('Sent Successfully'));
    }
}
