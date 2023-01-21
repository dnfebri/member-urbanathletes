<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\ApiMidtrans;
use App\Models\ApiModels;
use App\Models\Orders;
use App\Models\Rp199;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Rp199Controller extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }

    public function daftar()
    {
        // dd(date('YmdHi'));
        return view("public/promo/199/daftar", ['clubs' => $this->apiModels->allClubs()]);
    }
    
    public function generate()
    {
        return view("public/promo/199/generate");
    }

    public function updateKode(Request $request)
    {
        $rp199s = Rp199::where('email', $request->email)->first();
        if (!$rp199s) {
            return redirect()->route('199.daftar')->withInput()->with('alert', 'Email anda belum terdaftar di 199 kami');
        }
        $clubs_kode = $this->apiModels->allClubs($rp199s->club_id);
        $request->validate([
            'email' => 'required|email',
        ]);
        Rp199::where('email', $rp199s->email)
                    ->update([
                        'kode' => 'UA-199-' . date('YmdH') . '-' . $clubs_kode['codename'] . '-' . rand(100, 999)
                    ]);
        $rp199sUpdate = Rp199::where('email', $request->email)->first();
        $rp199sUpdate->url = url('199/confirm?kode=') ;
        $clubs = $this->apiModels->allClubs()['rows'];
        Mail::to( $rp199sUpdate->email )->send(new SendEmail($rp199sUpdate, $clubs));
        return redirect()->route('199.daftar', ['kode' => $rp199sUpdate->kode])->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $rp199sUpdate->email);
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                // 'kode' => 'unique:rp199s,kode',
                'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:rp199s,email'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                'club_id.required' => 'Pilih Club!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        $clubs_kode = $this->apiModels->allClubs($request->club_id);
        $request['kode'] = 'UA-199-' . date('YmdH') . '-' . $clubs_kode['codename'] . '-' . rand(100, 999);
        $datareq = $request->all();
        $datareq += array(
            // 'kode' => '123',
            'harga' => '199000',
            'status' => '0'
        );
        $rp199s = Rp199::create($datareq);
        $rp199s->url = url('199/confirm?kode=') ;

        $clubs = $this->apiModels->allClubs()['rows'];
        Mail::to( $rp199s->email )->send(new SendEmail($rp199s, $clubs));
        return redirect()->route('199.send', ['kode' => $rp199s->kode])->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $rp199s->email);
    }

    public function send($kode)
    {
        $dataInvoice = Rp199::where('kode', $kode)->first();
        return view("public/promo/199/send", compact('dataInvoice'));
    }
    
    public function confirm(Request $request)
    {
        // dd($request);
        $promoName = 'Membership 199';
        $dataReq = Rp199::where('kode', $request->kode)->first();
        if (!$dataReq) {
            return view("public/member/daftar/order/notData");
        }
        
        $midtrans = new ApiMidtrans();
        $midtrans->midtransConfig();

        // $order = \Midtrans\Transaction::status($kode);
        $order = $midtrans->getStatusOrder($dataReq->kode);
        if ($order['status_code'] != 404) {
            // dd($order);
            return redirect()->route('order.status', ['id' => $order['order_id']]);
        }
        $params = array(
            'transaction_details' => array(
                'order_id' => $dataReq->kode,
                'gross_amount' => '',
            ),
            'item_details' => array([
                'id' => $dataReq->id,
                'price' => $dataReq->harga,
                'quantity' => 1,
                'name' => $promoName,
            ]),
            'customer_details' => array(
                'first_name' => $dataReq->nama,
                'last_name' => '',
                'email' => $dataReq->email,
                'phone' => $dataReq->nomor,
            ),
        );
        // dd($params);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view("public/promo/199/confirm", compact('params'), ['token' => $snapToken, 'dataInvoice' => $dataReq]);
    }

    public function order(Request $request)
    {
        // dd($request);
        $dataOrder = json_decode($request->data_json_bayar);
        $order = Orders::create([
            'order_name' => '199 Membership',
            'order_id' => $request->kode,
            'gross_amount' => $dataOrder->gross_amount,
            'status' => $dataOrder->transaction_status,
            'transaction_id' => $dataOrder->transaction_id,
            'payment_type' => $dataOrder->payment_type,
            'json_midtrans' => $request->data_json_bayar
        ]);
        return redirect()->route('order.status', ['id' => $order->order_id]);
    }
}
