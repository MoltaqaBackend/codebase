<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Dashboard\RoleRequest;
use App\Http\Resources\Api\RoleResource;
use App\Models\Role;
use App\Repositories\Contracts\RoleContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;

class RoleController extends BaseApiController
{
    /**
     * RoleController constructor.
     * @param RoleContract $repository
     */
    public function __construct(RoleContract $repository)
    {
        parent::__construct($repository, RoleResource::class,'role');
    }

    /**
     * @param RoleRequest $request
     * @return JsonResponse
     */
    public function store(RoleRequest $request): JsonResponse
    {
        $role = $this->repository->create([
            'name' => $request['name'],
        ]);
        $requestPermissions=$request['role_permissions']?array_filter(Arr::flatten(array_values($request['role_permissions']))):[];
        $role->syncPermissions($requestPermissions);
        return $this->respondWithSuccess(__('role added successfully'), [
            'role' => new RoleResource($role),
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param Role $role
     * @return JsonResponse
     */
    public function show(Role $role): JsonResponse
    {
        return $this->respondWithSuccess(__('role details'), [
            'role' => (new RoleResource($role->load('permissions'))),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     *
     */
    public function edit(Role $role)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param RoleRequest $request
     * @param Role $role
     * @return JsonResponse
     */
    public function update(RoleRequest $request, Role $role): JsonResponse
    {
        $role = $this->repository->update($role, $request->all());
        $requestPermissions=$request['role_permissions']?array_filter(Arr::flatten(array_values($request['role_permissions']))):[];
        $role->syncPermissions($requestPermissions);
        return $this->respondWithSuccess(__('role updated successfully'), [
            'role' => (new RoleResource($role->load('permissions'))),
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     *
     * @return JsonResponse
     */
    public function destroy(Role $role): JsonResponse
    {
        $this->repository->remove($role);
        return $this->respondWithSuccess(trans('messages.responses.deleted'));
    }
}
