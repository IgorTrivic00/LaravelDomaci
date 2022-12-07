<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZaposleniResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'ime' => $this->resource->ime,
            'prezime' => $this->resource->prezime,
            'pozicija' => $this->resource->pozicija,
            'pol' => $this->resource->pol,
            'email' => $this->resource->email,
            'kontakt' => $this->resource->kontakt,
            'kompanija' => new KompanijaResource($this->resource->kompanija),
            'grad' => new GradResource($this->resource->grad)
        ];

    }
}
