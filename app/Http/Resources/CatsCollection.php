<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CatsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->cat_id,
            'name' => $this->cat_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
        // return parent::toArray($request);
    }
}
