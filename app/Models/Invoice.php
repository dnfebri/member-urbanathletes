<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'join_id', 'club', 'harga', 'tanggal', 'status', 'image'];

    public function getIndex()
    {
        $data = Invoice::join('joins', 'invoices.join_id', 'joins.id')
                                ->get(['invoices.id', 'invoices.kode', 'invoices.club', 'joins.*']);
        return $data;
    }
}
