<?php

namespace App\Http\Resources;

// use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Models\DataStatict;
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
        $kdRefName = 'UA';
        $promoName = '';
        $dataStatict = new DataStatict();
        $influensers = $dataStatict->PromoBisV2();
        foreach ($influensers as $row ) {
            if ($row['id'] == $this->kdRef) {
                $kdRefName = $row['name'];
            }
        }
        if ($this->promo == 1) {$promoName = 'Back In Shape - 488 K';}
        if ($this->promo == 2) {$promoName = 'Back In Shape - 988 K';}

        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "nomor" => $this->nomor,
            "email" => $this->email,
            "alamat" => $this->alamat,
            "kode" => $this->kode,
            "kdRef" => $this->kdRef,
            "kdRefInfluens" => $kdRefName,
            "club_id" => $this->club_id,
            "promo" => $this->promo,
            "promoName" => $promoName,
            "harga" => $this->harga,
            "status" => $this->status,
            "image" => $this->image
        ];
    }
}
