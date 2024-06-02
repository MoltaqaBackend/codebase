<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Enum\UserTypeEnum;
use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Api\V1\Dashboard\UserRequest;
use App\Http\Resources\Api\V1\Dashboard\UserResource;
use App\Models\User ;
use App\Repositories\Contracts\UserContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;

class UserController extends BaseApiController
{
    /**
     * UserController constructor.
     * @param UserContract $repository
     */
    public function __construct(UserContract $repository)
    {
        parent::__construct($repository, UserResource::class, 'User');
    }

    /**
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        $User = $this->repository->create($request->validated());
        return $this->respondWithSuccess(__('User added successfully'), [
            'User' => new UserResource($User),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param User $User
     * @return JsonResponse
     */
    public function show(User $User): JsonResponse
    {
        return $this->respondWithSuccess(__('User details'), [
            'User' => (new UserResource($User)),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $User
     * @return JsonResponse
     */
    public function update(UserRequest $request, User $User): JsonResponse
    {
        $User = $this->repository->update($User, $request->validated());
        return $this->respondWithSuccess(__('User updated successfully'), [
            'User' => (new UserResource($User)),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $User
     *
     * @return JsonResponse
     */
    public function destroy(User $User): JsonResponse
    {
        $this->repository->remove($User);
        return $this->respondWithSuccess(trans('messages.responses.deleted'));
    }


}
