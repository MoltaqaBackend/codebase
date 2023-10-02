<?php

namespace App\Http\Controllers\Api\Core;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Core\NotificationMarkReadRequest;
use App\Http\Requests\Api\Core\NotificationRequest;
use App\Http\Resources\Api\Core\NotificationResource;
use Illuminate\Http\Request;

/**
 * @group Core
 * Apis may be needed globaly in the system
 * 
 * @subgroup Reusable Selected Lists
 * @subgroupDescription Manage Reusable Selected Lists
 */
class CoreController extends Controller
{
    /**
     * list notifications.
     * an API which Offers a mean to list all notifications
     * 
     * @subgroup Manage FCM Notifications
     * @subgroupDescription Manage FCM Notifications
     * 
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function notifications(NotificationRequest $request){
        $data = $request->unread ? NotificationResource::collection($request->user()->unreadNotifications) : NotificationResource::collection(auth()->user()->notifications);
        return apiSuccess($data,[],[], __('Data Found'));
    }

    /**
     * mark notifications as read.
     * an API which Offers a mean to mark all notifications as read or single notification
     * 
     * @subgroup Manage FCM Notifications
     * @subgroupDescription Manage FCM Notifications
     * 
     * @authenticated
     * @header Api-Key xx
     * @header Api-Version v1
     * @header Accept-Language ar
     */
    public function notificationsMarkRead(NotificationMarkReadRequest $request){
        $request->user()->unreadNotifications
            ->when($request->notification_id, function ($query) use ($request) {
                return $query->where('id', $request->notification_id);
            })->markAsRead();
        return apiSuccess(array(),[],[], __('Sucessfull Operation'));
    }
}
