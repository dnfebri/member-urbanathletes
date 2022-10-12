<?php

namespace App\Http\Resources;

use App\Models\DataStatict;
use Illuminate\Http\Resources\Json\JsonResource;

class BisPayCollection extends JsonResource
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
        $dataStatict = new DataStatict();
        $influensers = $dataStatict->PromoBisV2();
        foreach ($influensers as $row ) {
            if (strtolower($row['id']) == strtolower($this->kdRef)) {
                $kdRefName = $row['name'];
            }
        }
        return [
            "id" => $this->id,
            "order_name" => $this->order_name,
            "order_id" => $this->order_id,
            "nama" => $this->nama,
            "email" => $this->email,
            "kdRef" => $this->kdRef,
            "kdRefName" => $kdRefName,
            "promo" => $this->promo,
            "gross_amount" => $this->gross_amount,
            "status" => $this->status,
            "transaction_id" => $this->transaction_id,
            "payment_type" => $this->payment_type,
            "created_at" => $this->created_at
        ];
    }
}
