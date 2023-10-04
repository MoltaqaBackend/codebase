<?php

namespace App\Http\Controllers\Api\V1\Chat;

use App\Actions\Chats\GetChatAction;
use App\Actions\Chats\GetChatsAction;
use App\Actions\Chats\SendMessageAction;
use App\Enum\Chat\ChatUsersTypeEnum;
use App\Http\Controllers\Api\BaseApiController;
use App\Http\Resources\Api\Chat\ChatResource;
use App\Http\Resources\Api\Chat\MessageResource;
use App\Models\Chat;
use App\Models\Order;
use App\Repositories\Contracts\ChatContract;
use App\Traits\ApiResponseTrait;

class ChatController extends BaseApiController
{

    use ApiResponseTrait;
    public function __construct(ChatContract $repository)
    {
        parent::__construct($repository, ChatResource::class);
    }

    /**
     * @throws \Exception
     */
    public function index(): mixed
    {
        $chats = app(GetChatsAction::class)->handle(auth(activeGuard())->user());
        return $this->respondWithCollection($chats);
    }

    /**
     * @throws \Exception
     */
    protected function showChat(ChatRequest $request)
    {
        $order = Order::findOrFail($request->order_id);
        $chat = app(GetChatAction::class)
            ->handle($order, auth()->user(), $request->type);

        return $this->respondWithModel($chat);
    }

    protected function sendMessage(SendMessageRequest $request, Chat $chat)
    {
        $to = ChatUsersTypeEnum::model($request->to_type);
        $to = $to::findOrFail((int) $request->to_id);

        $message = app(SendMessageAction::class)
            ->handle($chat, auth()->user(), $to, $request->message, [], toType: $request->to_type);

        return $this->setStatusCode(200)->respond(new MessageResource($message), []);

    }
}
