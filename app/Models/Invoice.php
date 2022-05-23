<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['kode', 'join_id', 'club', 'harga', 'tanggal', 'status', 'image'];

    public function getIndex()
    {
        $data = Invoice::join('joins', 'invoices.join_id', 'joins.id')
                                // ->get(['invoices.id', 'invoices.kode', 'invoices.club', 'joins.*'])
                                ->orderBy('invoices.id', 'DESC');
        // $data = DB::table('invoices')
        //                         ->join('joins', 'invoices.join_id', '=', 'joins.id')
        //                         // ->join('club_data', 'invoices.club', '=', 'club_data.club_id')
        //                         ->paginate(15);
        return $data;
    }
}
