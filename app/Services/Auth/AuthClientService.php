<?php

namespace App\Services\Auth;

use App\Exceptions\Api\Auth\AuthException;
use App\Http\Requests\Api\Auth\RegisterClientRequest;
use App\Services\Auth\AuthAbstract;
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

    public function deleteAccount(Request $request):JsonResponse
    {
        $user = $request->user();
        if(is_null($user))
            throw AuthException::userNotFound(['unauthorized' => [__('Unauthorized')]],401);

        DB::beginTransaction();
        $user->tokens()->delete();
        if($user->delete())
        {
            DB::commit();
            return $this->respondWithSuccess(__('Deleted Successfully'));
        }
        DB::rollBack();

        return $this->setStatusCode(400)->respondWithError(__('Failed Operation'));
    }

    public function register(FormRequest $request,$abilities = null): User
    {
        if(!($request instanceof RegisterClientRequest))
            throw AuthException::wrongImplementation(['wrong_implementation' => [__("Failed Operation")]]);

        $data = $request->validated();
        $data['is_active'] = 1;

        $user = User::create($data);
        if(!$user->wasRecentlyCreated)
            throw AuthException::userFailedRegistration(['genration_failed' => [__("Failed Operation")]]);

        $user->access_token = $user->createToken('snctumToken',$abilities ?? [])->plainTextToken;
        $this->addTokenExpiration($user->access_token);

        return $this->handelMobileOTP($user);
    }
}
