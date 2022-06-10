<?php

namespace App\Http\Controllers;

use App\Models\ApiMidtrans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function status($id)
    {
        $dataStatus = new ApiMidtrans();
        $dataOrder = DB::table('invoices')
                    ->join('joins', 'invoices.join_id', '=', 'joins.id')
                    ->where('kode', $id)->first();
        $data = [
            'status' => $dataStatus->getStatusOrder($id),
            'dataOrder' => $dataOrder
        ];
        // dd($dataOrder);
        return view("public/member/daftar/order/status", $data);
    }

    public function search($id = NULL)
    {
        return view("public/member/daftar/order/search");
    }
    
    public function searchDetail($id = NULL)
    {
        $dataStatus = new ApiMidtrans();
        $dataOrder = DB::table('invoices')
                    ->join('joins', 'invoices.join_id', '=', 'joins.id')
                    ->where('kode', $id)->first();
        $data = [
            'status' => $dataStatus->getStatusOrder($id),
            'dataOrder' => $dataOrder
        ];
        // dump($data);
        return view("public/member/daftar/order/searchDetail", $data);
    }
}
