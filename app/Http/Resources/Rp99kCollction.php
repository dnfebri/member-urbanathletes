<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rp99kCollction extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    
    public function toArray($request)
    {
        $club = '';
        // dump($this);
        // foreach ($this->clubs as $row) {
            
        // }
        return [
            "id" => $this->id,
            "nama" => $this->nama,
            "nomor" => $this->nomor,
            "email" => $this->email,
            "alamat" => $this->alamat,
            "kode" => $this->kode,
            "club_id" => $this->club_id,
            "club" => $club,
            "harga" => $this->harga,
            "tanggal" => $this->tanggal,
            "status" => $this->status,
            "image" => $this->image,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "order_name" => $this->order_name,
            "order_id" => $this->order_id,
            "gross_amount" => $this->gross_amount,
            "transaction_id" => $this->transaction_id,
            "payment_type" => $this->payment_type
        ];
    }
}
