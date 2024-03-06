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
            $this->mergeWhen($this->OTP != null && config('global.return_otp_in_response'), [
                "verification_code" => $this->OTP ?? 0000,
            ]),
            $this->mergeWhen($this->access_token != null, [
                "access_token" => $this->access_token ?? '',
            ]),
            "user" => [
                "id" => $this->id ?? 0,
                "name" => $this->name ?? '',
                "email" => $this->email ?? '',
                "mobile" => $this->mobile ?? '',
                "image" => $this->avatar ?? '',
                "is_verified" => is_null($this->email_verified_at) ? false : true,
                'roles' => implode(' ,', $this->getRoleNamesArray()),
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
            $output[] = [
                'id' => $permission->id,
                'action' => str_replace('-', ' ', $permission->slug),
                'subject' => strtolower($permission->model),
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

    public function getRoleNamesArray()
    {
        return $this->getRoleNames()->map(function ($role) {
            return json_decode($role, true)[get_current_lang()];
        })->toArray();
    }
}
