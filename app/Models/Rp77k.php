<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rp77k extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nomor', 'email', 'alamat', 'kode', 'club_id', 'harga', 'tanggal', 'status', 'image'];

    public function getIndex()
    {
        $data = Rp77k::join('orders', 'rp77ks.kode', 'orders.order_id')
                            ->orderBy('rp77ks.id', 'DESC');
        return $data;
    }
}
