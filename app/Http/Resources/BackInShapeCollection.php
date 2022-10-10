<?php

namespace App\Http\Resources;

// use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class BackInShapeCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "nomor" => $this->nomor,
            "email" => $this->email,
            "alamat" => $this->alamat,
            "kode" => $this->kode,
            "kdRef" => $this->kdRef,
            "club_id" => $this->club_id,
            "promo" => $this->promo,
            "harga" => $this->harga,
            "status" => $this->status,
            "image" => $this->image
        ];
    }
}
