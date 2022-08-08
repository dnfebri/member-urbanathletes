<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rp99k extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nomor', 'email', 'alamat', 'kode', 'club_id', 'harga', 'tanggal', 'status', 'image'];

    public function getIndex()
    {
        $data = Rp99k::join('orders', 'rp99ks.kode', 'orders.order_id')
                                // ->get(['rp99ks.id', 'rp99ks.kode', 'rp99ks.club', 'joins.*'])
                                ->orderBy('rp99ks.id', 'DESC');
        // $data = DB::table('invoices')
        //                         ->join('joins', 'invoices.join_id', '=', 'joins.id')
        //                         // ->join('club_data', 'invoices.club', '=', 'club_data.club_id')
        //                         ->paginate(15);
        return $data;
    }
}
