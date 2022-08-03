<?php

namespace App\Http\Controllers;

use App\Models\ApiMidtrans;
use App\Models\Orders;
use App\Models\Rp99k;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\Vue;

class OrderController extends Controller
{
    public function __construct()
    {
        // function dataOrderJoin($id) {
        //     return DB::table('rp99ks')
        //             ->join('orders', 'rp99ks.kode', '=', 'orders.order_id')
        //             ->where('kode', $id)->first();
        // }
    }

    public function status($id)
    {
        $dataStatus = new ApiMidtrans();
        // $dataOrder = DB::table('rp99ks')
        //             ->join('orders', 'rp99ks.kode', '=', 'orders.order_id')
        //             ->where('kode', $id)->first();
        $dataOrder = Rp99k::where('kode', $id)->first();
        if (!$dataOrder) {
            return redirect()->route('order.notData');
        }
        $dataOrder->order_name = 'rp99k';
        $data = [
            'status' => $dataStatus->getStatusOrder($id),
            'dataOrder' => $dataOrder
        ];
        $order = Orders::where('order_id', $id)->first();
        if (!$order) {
            // dd($data);
            if ($data['status']['status_code'] == 404) {
                return redirect()->route('order.notData');
            } else {
                $order = Orders::create([
                    'order_name' => $dataOrder->order_name,
                    'order_id' => $dataOrder->kode,
                    'gross_amount' => $data['status']['gross_amount'],
                    'status' => $data['status']['transaction_status'],
                    'transaction_id' => $data['status']['transaction_id'],
                    'payment_type' => $data['status']['payment_type'],
                    'json_midtrans' => json_encode($data['status'])
                ]);
            }
        }
        // dd($data);
        return view("public/member/daftar/order/status", $data);
    }

    public function search($id = NULL)
    {
        return view("public/member/daftar/order/search");
    }

    public function searchDetail($id = NULL)
    {
        // dd(dataOrderJoin($id));
        function dataOrderJoin($id) {
            return DB::table('rp99ks')
                    ->join('orders', 'rp99ks.kode', '=', 'orders.order_id')
                    ->where('kode', $id)->first();
        }
        $dataStatus = new ApiMidtrans();
        $local = Orders::where('order_id', $id)->first();
        $midtrans = $dataStatus->getStatusOrder($id);
        if (!$local) {
            if ($midtrans['status_code'] != 200) {
                $dataOrder = dataOrderJoin($id);
                $data = [
                    'status' => $dataStatus->getStatusOrder($id),
                    'dataOrder' => $dataOrder
                ];
                return view("public/member/daftar/order/searchDetail", $data);
            } else {
                $dataOrder99k = Rp99k::where('kode', $id)->first();
                $dataMidtrans = json_encode($midtrans);
                $order = Orders::create([
                    'order_name' => "99K",
                    'order_id' => $dataOrder99k->kode,
                    'gross_amount' => $midtrans['gross_amount'],
                    'status' => $midtrans['transaction_status'],
                    'transaction_id' => $midtrans['transaction_id'],
                    'payment_type' => $midtrans['payment_type'],
                    'json_midtrans' => $dataMidtrans
                ]);
                $dataOrder = dataOrderJoin($id);
                $data = [
                    'status' => $dataStatus->getStatusOrder($id),
                    'dataOrder' => $dataOrder
                ];
                return view("public/member/daftar/order/searchDetail", $data);
            }
        } else {
            if ($local->status !== $midtrans['transaction_status']) {
                // echo "rubah status";
                Orders::where('order_id', $local->order_id)
                    ->update([
                        'status' => $midtrans['transaction_status'],
                        'json_midtrans' => json_encode($midtrans)
                    ]);
            }
            $dataOrder = dataOrderJoin($id);
            $data = [
                'status' => $dataStatus->getStatusOrder($id),
                'dataOrder' => $dataOrder
            ];
            return view("public/member/daftar/order/searchDetail", $data);
        }
    }

    public function save(Request $request)
    {
        $dataOrder = json_decode($request->data_json_bayar);
        $order = Orders::create([
            'order_name' => $request->order_name,
            'order_id' => $request->kode,
            'gross_amount' => $dataOrder->gross_amount,
            'status' => $dataOrder->transaction_status,
            'transaction_id' => $dataOrder->transaction_id,
            'payment_type' => $dataOrder->payment_type,
            'json_midtrans' => $request->data_json_bayar
        ]);
        // dd($order);
        return redirect()->route('order.status', ['id' => $order->order_id]);
    }

    public function notData()
    {
        return view("public/member/daftar/order/notData");
    }
}
