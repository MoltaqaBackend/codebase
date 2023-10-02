<?php

namespace App\Http\Resources\Api\AppClient\Home;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'code' => $this->code ?? '',
            'offers' => OrderPriceOfferResource::collection($this->priceOffers->sortDesc()) ?? [],
        ];
    }
}
