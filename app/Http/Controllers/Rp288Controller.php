<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\ApiMidtrans;
use App\Models\ApiModels;
use App\Models\Rp288;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Rp288Controller extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }

    public function daftar()
    {
        // dd(date('YmdHi'));
        return view("public/promo/288/daftar", ['clubs' => $this->apiModels->allClubs()]);
    }

    public function save(Request $request)
    {
        $request->validate(
            [
                // 'kode' => 'unique:rp288s,kode',
                'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:rp288s,email'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                'club_id.required' => 'Pilih Club!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        $clubs_kode = $this->apiModels->allClubs($request->club_id);
        $request['kode'] = 'UA-288-' . date('YmdH') . '-' . $clubs_kode['codename'] . '-' . rand(100, 999);
        $datareq = $request->all();
        $datareq += array(
            // 'kode' => '123',
            'harga' => '288000',
            'status' => '0'
        );
        $rp288s = Rp288::create($datareq);
        $rp288s->url = url('288/confirm?kode=') . $rp288s->kode ;

        $clubs = $this->apiModels->allClubs()['rows'];
        Mail::to( $rp288s->email )->send(new SendEmail($rp288s, $clubs));
        return redirect()->route('288.send', ['kode' => $rp288s->kode]);
    }

    public function send($kode)
    {
        $dataInvoice = Rp288::where('kode', $kode)->first();
        return view("public/promo/288/send", compact('dataInvoice'));
    }

    public function confirm(Request $request)
    {
        dd($request);
        $promoName = 'Membership 288';
        $dataReq = Rp288::where('kode', $request->kode)->first();
        if (!$dataReq) {
            return view("public/member/daftar/order/notData");
        }
        
        $midtrans = new ApiMidtrans();
        $midtrans->midtransConfig();

        // $order = \Midtrans\Transaction::status($kode);
        $order = $midtrans->getStatusOrder($dataReq->kode);
        if ($order['status_code'] != 404) {
            // dd($order);
            return redirect()->route('v2.back-in-shape.status', ['id' => $order['order_id']]);
        }
        $params = array(
            'transaction_details' => array(
                'order_id' => $dataReq->kode,
                'gross_amount' => '',
            ),
            'item_details' => array(
               [
                'id' => $dataReq->id,
                'price' => $dataReq->harga,
                'quantity' => 1,
                'name' => $promoName,
               ]
            ),
            'customer_details' => array(
                'first_name' => $dataReq->nama,
                'last_name' => '',
                'email' => $dataReq->email,
                'phone' => $dataReq->nomor,
            ),
        );
        // dd($params);
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view("public/promo/288/confirm", compact('params'), ['token' => $snapToken, 'dataInvoice' => $dataReq]);
    }
}
