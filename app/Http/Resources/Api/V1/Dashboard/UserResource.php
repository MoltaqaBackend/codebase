<?php

namespace App\Http\Resources\Api\V1\Dashboard;

use App\Http\Resources\Api\RoleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'            => $this->id,
            'name'          => $this->name,
            'type'          => $this->type,
            'email'         => $this->email,
            'mobile'        => $this->mobile,
            'is_active'     => $this->is_active,
            'role'          => RoleResource::make($this->roles->first())
        ];
    }
}
