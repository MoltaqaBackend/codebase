<?php

namespace App\Http\Resources\Api\Auth;

use Illuminate\Http\Request;

class ProviderResource extends UserResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $parent = parent::toArray($request);
        $this->loadMissing('provider');
        $parent['user'] = array_merge($parent['user'], [
            "address" => optional($this->provider)->address ?? '',
        ]);
        return $parent;
    }
}
