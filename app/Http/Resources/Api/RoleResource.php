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
            'created_at' => $this->created_at->format('Y-m-d H:i'),
            'permissions' => 
                 $this->permissions->isNotEmpty() ? $this->customizePermissions() : (object)null,
            
            'permissions_names' => 
                 $this->permissions->isNotEmpty() ? $this->permissions->pluck('name') : (object)null,
            
            'grouped_permissions_names' => 
                 $this->permissions->isNotEmpty() ? $this->groupedPermissions() : (object)null,
            
        ];
    }

    private function customizePermissions()
    {
        return $this->permissions->groupBy('model')->map(function ($model, $key) {
            return $model->pluck('id');
        })->collect();
    }


    private function groupedPermissions()
    {
        return $this->permissions->groupBy('model')->map(function ($model, $key) {
            return $model->pluck('name');
        })->collect();
    }
}
