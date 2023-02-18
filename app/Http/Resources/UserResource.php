<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($user)
    {
        return [
            'user_name' => $this->name,
            'products' => User::Find($this->id)->products()->orderBy('id','DESC')->get('name')
        ];
    }

}
