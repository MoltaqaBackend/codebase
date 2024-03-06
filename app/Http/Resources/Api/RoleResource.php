<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'permissions' => $this->permissions->isNotEmpty() ? PermissionResource::collection($this->permissions) : [],
            // 'permissions_ids' => $this->permissions->isNotEmpty() ? $this->permissionsIds() : (object)null,
            // 'permissions_names' => $this->permissions->isNotEmpty() ? $this->permissionsNames() : (object)null,
            // 'grouped_permissions_names' => $this->permissions->isNotEmpty() ? $this->groupedPermissionsNames() : (object)null,

        ];
    }

    private function permissionsIds()
    {
        return $this->permissions->groupBy('model')->map(function ($model, $key) {
            return $model->pluck('id');
        })->collect();
    }

    private function permissionsNames()
    {
        return $this->permissions->map(function ($model, $key) {
            return str_replace('-', ' ', $model->slug);
        })->collect();
    }

    private function groupedPermissionsNames()
    {
        return $this->permissions->groupBy('model')->map(function ($model, $key) {
            return $model->pluck('slug')->map(function ($name, $keyinner) {
                return str_replace('-', ' ', $name);
            })->collect();
        })->collect();
    }
}
