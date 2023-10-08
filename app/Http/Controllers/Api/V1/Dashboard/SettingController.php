<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\RoleRequest;
use App\Http\Requests\Dashboard\SettingRequest;
use App\Http\Resources\Api\Setting\SettingResource;
use App\Repositories\Contracts\SettingContract;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class SettingController extends Controller
{
    /**
     * @param SettingContract $repository
     */
    public function __construct(SettingContract $repository)
    {
//        parent::__construct($repository, SettingResource::class, 'setting');
    }

    public function index(){
        return myFatoorahTransaction([],50);

    }

    /**
     * @param RoleRequest $request
     * @return JsonResponse
     */
    public function store(SettingRequest $request): JsonResponse
    {
        cache()->clear();
        $setting = $this->repository->defaultUpdateOrCreate([
            'key' => $request->key,
        ],

            [
                'key' => $request->key,
                'name' => $request->key,
                'value' => $request->validated('value')
            ]
        );
        Cache::forget('settings');

        return $this->respondWithSuccess(__('setting added successfully'), [
            'setting' => new SettingResource($setting),
        ]);
    }

}
