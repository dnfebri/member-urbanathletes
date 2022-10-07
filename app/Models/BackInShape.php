<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackInShape extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 
        'nomor', 
        'email', 
        'alamat', 
        'kode',
        'kdRef',
        'club_id',
        'promo',
        'harga',
        'status', 
        'image'
    ];
}
