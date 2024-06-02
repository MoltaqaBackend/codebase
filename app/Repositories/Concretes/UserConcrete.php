<?php

namespace App\Repositories\Concretes;

use App\Models\User;
use App\Enum\UserTypeEnum;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\UserContract;

class UserConcrete extends BaseConcrete implements UserContract
{
    /**
     * UserConcrete constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function create(array $attributes = [], string $type = UserTypeEnum::ADMIN): mixed
    {
        if (!empty($attributes)) {
            $role_id = Arr::pull($attributes, 'role_id');
            $attributes['password'] = bcrypt($attributes['password']);
            $attributes['type'] = $type;

            $filtered = $this->cleanUpAttributes($attributes);
            $model = $this->query->create($filtered);
            $model->assignRole($role_id);

            $this->propertyLogActivity(
                $model,
                auth()->user(),
                "$this->modelName Created",
                ['action' => 'Creation', 'module' => $this->modelName]
            );
            return $model;
        }
        return false;
    }

    public function update(Model $model, array $attributes = []): mixed
    {
        if (!empty($attributes)) {
            $role_id = Arr::pull($attributes, 'role_id');
            if (Arr::has($attributes, 'password') && !empty($attributes['password'])) {
                $attributes['password'] = bcrypt($attributes['password']);
            }

            $filtered = $this->cleanUpAttributes($attributes);
            $model = tap($model)->update($filtered)->fresh();
            $model->syncRoles([$role_id]);

            $this->propertyLogActivity(
                $model,
                auth()->user(),
                "$this->modelName Updated",
                ['action' => 'Update', 'module' => $this->modelName]
            );
            return $model;
        }
        return false;
    }
}
