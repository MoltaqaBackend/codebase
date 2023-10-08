<?php

namespace App\Http\Resources\Api\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            $this->mergeWhen($this->OTP != null, [
                "verification_code" => $this->OTP ?? 0000,
            ]),
            $this->mergeWhen($this->access_token != null, [
                "access_token" => $this->access_token ?? '',
            ]),
            "user" => [
                "name" => $this->name ?? '',
                "email" => $this->email ?? '',
                "mobile" => $this->mobile ?? '',
                "image" => $this->avatar ?? '',
                'roles' => implode(' ,', $this->getRoleNames()->toArray()),
                'roles_ids' => $this->getRoleIds(),
                'role_id' => $this->getRoleIds()[0] ?? null,
                'permissions' => $this->formatPermsForCASL()
            ],
        ];
    }


    protected function formatPermsForCASL(): array
    {
        $output = [];
        foreach ($this->getAllPermissions() as $permission) {
            $subject = $permission->model;
            $output[] = [
                'action' => $permission->name,
                'subject' => $subject,
            ];
        }
        return $output;
    }
    public function getRoleIds()
    {
        return $this->whenLoaded('roles', function () {
            return $this->roles->sortByDesc('id')->pluck('id')->toArray();
        });
    }
}
