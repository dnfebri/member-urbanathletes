<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rp288 extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nomor', 'email', 'alamat', 'kode', 'club_id', 'harga', 'tanggal', 'status', 'image'];

    public function getIndex($search = null)
    {
        $data = Rp288::where('nama', 'like', '%'.$search.'%')
                                ->orwhere('rp288s.email', 'like', '%'.$search.'%')
                                ->orwhere('order_id', 'like', '%'.$search.'%')
                                ->join('orders', 'rp288s.kode', 'orders.order_id')
                                ->orderBy('rp288s.id', 'DESC');
        return $data;
    }
}
