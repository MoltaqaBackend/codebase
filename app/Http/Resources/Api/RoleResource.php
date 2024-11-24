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
            "name_ar" => getTranslation($this, 'name', 'ar'),
            "name_en" => getTranslation($this, 'name', 'en'),
            'slug' => $this->slug,
            'created_at' => $this->created_at?->translatedFormat('Y-m-d H:i a'),
            'permissions' => $this->permissions->isNotEmpty() ? $this->groupedPermissions() : (object)null,
        ];
    }

    private function groupedPermissions()
    {
        return $this->permissions->groupBy('model')->map(function ($controls, $key) {
            return [
                'name' => __('permissions.responses.' . $key),
                'controls' => $controls->map(function ($control) {
                    return [
                        "name" => $control->name,
                        "key" => explode(" ", $control->name)[0],
                        "id" => $control->id,
                    ];
                })->all(),
            ];
        })->values();

    }
}
