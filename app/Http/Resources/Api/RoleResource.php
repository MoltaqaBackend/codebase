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
            'is_active' => $this->is_active,
            'created_at' => $this->created_at?->translatedFormat('Y-m-d H:i a'),
            'permissions' => $this->permissions->isNotEmpty() ? PermissionResource::collection($this->permissions) : [],
            'permissions_grouped' => $this->permissions->isNotEmpty() ? $this->groupedPermissionsNames() : (object)null,
            // 'permissions_ids' => $this->permissions->isNotEmpty() ? $this->permissionsIds() : (object)null,
            // 'permissions_names' => $this->permissions->isNotEmpty() ? $this->permissionsNames() : (object)null,
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
        $output = [];
        foreach ($this->permissions->groupBy('model') as $key => $group) {
            $temp = array();
            foreach ($group as $permission) {
                $temp[] = new PermissionResource($permission);
            }
            array_push($output, ['name' => strtolower($key), 'controls' => array_values($temp)]);
        }
        return $output;
    }
}
