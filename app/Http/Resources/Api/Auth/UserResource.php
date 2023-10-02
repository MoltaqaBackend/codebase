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
            ],
        ];
    }
}
