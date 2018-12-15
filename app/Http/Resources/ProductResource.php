<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      //  return parent::toArray($request);
        return [
            "id"=>$this->id,
            "descriptions"=>$this->deatil,
            "price"=>$this->price,
            "stock"=>$this->stock,
            "discoint"=>$this->discount,

        ];
    }
}