<?php

namespace App\Services\Auth;

use App\Exceptions\Api\Auth\AuthException;
use App\Http\Requests\Api\Auth\ForgetPasswordDashboardRequest;
use App\Http\Requests\Api\Auth\LoginDashboardRequest;
use App\Http\Requests\Api\Auth\RegisterAdminRequest;
use App\Services\Auth\AuthAbstract;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class AuthAdminService extends AuthAbstract
{

    public function __construct()
    {
        parent::__construct(new User());
    }

    /**
     * Login
     */
    public function login(FormRequest $request,$abilities = null){
        if(!($request instanceof LoginDashboardRequest))
            throw AuthException::wrongImplementation(['wrong_implementation' => [__('Wrong Implementation')]]);

        $request->authenticate();
        $user = $request->user();

        if(!$user->isActive())
            throw AuthException::accountStatusDeactive(['deactive' => [__("Account Deactive")]]);

        $user->access_token = $user->createToken('snctumToken',$abilities ?? [])->plainTextToken;
        $this->addTokenExpiration($user->access_token);

        if($this->loginRequireSendOTP)
            return $this->handelOTPMethod($user);

        return $user;
    }

    /**
     * forget password.
     *
     * @return JsonResponse
     */
    public function forgetPassword(FormRequest $request,$abilities = null){
        if(!($request instanceof ForgetPasswordDashboardRequest))
            throw AuthException::wrongImplementation(['wrong_implementation' => [__('Wrong Implementation')]]);

        $user = $this->model::whereEmail($request->email)->first();
        if (is_null($user))
            throw AuthException::userNotFound(['unauthorized' => [__("Unauthorized")]]);

        $user->access_token = is_null($user->currentAccessToken()) ? $user->createToken('snctumToken', $abilities ?? [] )->plainTextToken : $user->currentAccessToken();
        return $this->handelOTPMethod($user);
    }

    public function register(FormRequest $request,$abilities = null): User
    {
        if(!($request instanceof RegisterAdminRequest))
            throw AuthException::wrongImplementation('wrong_implementation**' . __("Failed Operation"));

        $data = $request->validated();
        $user = User::create($data);
        if(!$user->wasRecentlyCreated)
            throw AuthException::userFailedRegistration('genration_failed**' . __("Failed Operation"));
        $user->access_token = $user->createToken('snctumToken',$abilities ?? [])->plainTextToken;
        $this->addTokenExpiration($user->access_token);

        return $this->handelMailOTP($user);
    }
}
