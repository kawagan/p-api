<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use Symfony\Component\Routing\Route;

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
            "rating"=>round($this->reviews->sum('star') / $this->reviews->count()),
            "discount"=>$this->discount,
            "links"=>[
                "reviews"=>\route('reviews.index',$this->id)
            ]

        ];
    }
}
