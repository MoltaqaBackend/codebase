<?php

namespace App\Http\Resources\Api\AppClient\Home;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderPriceOfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ?? 0,
            'price' => $this->price ?? '0',
            'price_cuurency' => $this->price.' '.__('currency') ?? '',
            'name' => optional($this->provider)->name ?? '',
            'avatar' => optional($this->provider)->avatar ?? '',
            'rate' => optional($this->provider)->rate ?? '',
            'distance' => '',
            'time' => '',
        ];
    }
}
