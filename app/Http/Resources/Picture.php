<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
// use App\Cat;

class Picture extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        var_dump($this->catsIds);die();
        return [
            'picture_id' => $this->picture_id,
            'picture_description' => $this->picture_description,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'cats' => Cat::collection($this->cats)
        ];
    }
}

