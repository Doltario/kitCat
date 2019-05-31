<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\LoofDocument;
use App\Http\Resources\LoofDocument as LoofDocumentResource;

// use App\Picture;

class Cat extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'cat_id' => $this->cat_id,
            'cat_name' => $this->cat_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'loof_document' => new LoofDocumentResource(LoofDocument::find($this->fk_loof_document_id))
            // 'pictures' => Picture::collection($this->pictures)
        ];
    }
}
