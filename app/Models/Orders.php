<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = ['order_name', 'order_id', 'gross_amount', 'status', 'transaction_id', 'payment_type', 'json_midtrans'];

    public function getIndex()
    {
        $data = Orders::join('rp99ks', 'orders.order_id', 'rp99ks.kode')
                                // ->get(['orders.id', 'orders.kode', 'orders.club', 'joins.*'])
                                ->orderBy('orders.id', 'DESC');
        // $data = DB::table('orders')
        //                         ->join('joins', 'orders.join_id', '=', 'joins.id')
        //                         // ->join('club_data', 'orders.club', '=', 'club_data.club_id')
        //                         ->paginate(15);
        return $data;
    }
}
