<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rp99k extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nomor', 'email', 'alamat', 'kode', 'club_id', 'harga', 'tanggal', 'status', 'image'];

    public function getIndex($search = null)
    {
        $data = Rp99k::where('nama', 'like', '%'.$search.'%')
                                ->orwhere('rp99ks.email', 'like', '%'.$search.'%')
                                ->orwhere('order_id', 'like', '%'.$search.'%')
                                ->join('orders', 'rp99ks.kode', 'orders.order_id')
                                ->orderBy('rp99ks.id', 'DESC');
        return $data;
    }
}
