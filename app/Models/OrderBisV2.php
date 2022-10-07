<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBisV2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_name',
        'order_id',
        'gross_amount',
        'status',
        'transaction_id',
        'payment_type',
        'json_midtrans'
    ];
}
