<?php

namespace App\Http\Resources;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\JsonResource;

class UserReferralResource extends JsonResource
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
            'name' => $this->name,
            'value' => $this->id,
            'image' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-160/icon_firefox.svg",
            'children' => UserReferralResource::collection($this->referrals),
        ];
    }
}
