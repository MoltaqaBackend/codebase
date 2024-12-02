<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthClientService extends AuthAbstract
{
    public function __construct()
    {
        parent::__construct(new User());
    }

    public function deleteAccount(Request $request): JsonResponse
    {
        $user = $request->user();
        DB::beginTransaction();
        $user->tokens()->delete();
        if ($user->delete()) {
            DB::commit();
            return $this->respondWithSuccess(__('Deleted Successfully'));
        }
        DB::rollBack();
        return $this->setStatusCode(400)->respondWithError(__('Failed Operation'));
    }

    public function register(FormRequest $request, $abilities = null)
    {
        $data = $request->validated();
        $data['is_active'] = 1;
        $user = User::create($data);
        $user->access_token = $user->createToken('snctumToken', $abilities ?? [], now()->addHours(1))->plainTextToken;
        return $this->handelMobileOTP($user);
    }
}
