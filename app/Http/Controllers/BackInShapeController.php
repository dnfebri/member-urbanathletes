<?php

namespace App\Http\Controllers;

use App\Mail\BisVerifEmail;
use App\Models\ApiMidtrans;
use App\Models\ApiModels;
use App\Models\BackInShape;
use App\Models\DataStatict;
use App\Models\OrderBisV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackInShapeController extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
        $this->dataStatict = new DataStatict();
    }
    
    public function index($kdref = 'null')
    {
        return view("public/promo/back-in-shape/index", ['kdRef' => $kdref]);
    }

    public function daftar(Request $request)
    {
        if(empty($request->kdRef)) {
            // dd($request);
            return view("public/promo/back-in-shape/index", ['kdRef' => 'ua']);
        }
        // dd($request);
        $kdRef = $request->kdRef;
        return view("public/promo/back-in-shape/daftar", ['kdRef' => $kdRef, 'clubs' => $this->apiModels->allClubs()]);
    }

    public function save(Request $request)
    {
        $clubs = $this->apiModels->allClubs()['rows'];
        $kdRef = '';
        $kdRefName = 'UA';
        $harga = 0;
        $promoName = '';
        $request->validate(
            [
                // 'kode' => 'unique:invoices,kode',
                // 'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:back_in_shapes,email',
                'noKtp' => 'required',
                'alamat' => 'required',
                'promo' => 'required'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                // 'nomor.required' => 'Jumlah Tps Harus diisi!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );

        foreach ($this->dataStatict->PromoBisV2() as $key => $kdp) {
            if ($kdp['id'] == $request->kdRef) {
                $kdRef = $kdp['id'];
                $kdRefName = $kdp['name'];
            }
        }

        if ($kdRef != '') {
            $request['kode'] = 'BIS-' . $request->kdRef . '-' . date('YmdH') . '-' . rand(100, 999);
        } else {
            $request['kode'] = 'BIS-UA-' . date('YmdH') . '-' . rand(100, 999);
        }

        if($request->promo == 1) {$harga = 488000;}
        if($request->promo == 2) {$harga = 988000;}
        
        $datareq = $request->all();
        $datareq += array(
            'harga' => $harga,
            'status' => '0'
        );
        $Bis = BackInShape::create($datareq);
        // dd($Bis);
        $Bis->url = url('v2/back-in-shape/proses?kode=') . $Bis->kode;
        if ($Bis->promo == 1) {$promoName = 'Back In Shape - 488 K';}
        if ($Bis->promo == 2) {$promoName = 'Back In Shape - 988 K';}
        $Bis->promoName = $promoName;
        $Bis->kdRefName = $kdRefName;
        
        Mail::to( $Bis->email )->send(new BisVerifEmail($Bis, $clubs));
        $ridirectLink = $request->kdRef != '' ? $request->kdRef : 'ua';
        return redirect('v2/back-in-shape?kdRef=' . $ridirectLink)->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $Bis->email);
    }

    public function proses(Request $request)
    {
        $dataReq = BackInShape::where('kode', $request->kode)->first();
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
                'name' => 'Promo 99k',
               ]
            ),
            'customer_details' => array(
                'first_name' => $dataReq->nama,
                'last_name' => '',
                'email' => $dataReq->email,
                'phone' => $dataReq->nomor,
            ),
            // "enabled_payments" => ["bri_epay", "echannel",
            // "bni_va", "bri_va", "gopay"],
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view("public/promo/back-in-shape/proses", compact('dataReq', 'params'), ['token' => $snapToken]);
        // dd($dataReq);
    }

    public function savePay(Request $request)
    {
        $dataOrder = json_decode($request->data_json_bayar);
        $order = OrderBisV2::create([
            'order_name' => $request->order_name,
            'order_id' => $request->kode,
            'gross_amount' => $dataOrder->gross_amount,
            'status' => $dataOrder->transaction_status,
            'transaction_id' => $dataOrder->transaction_id,
            'payment_type' => $dataOrder->payment_type,
            'json_midtrans' => $request->data_json_bayar
        ]);
        // dd($order);
        return redirect()->route('v2.back-in-shape.status', ['id' => $order->order_id]);   
    }

    public function status($id)
    {
        $dataStatus = new ApiMidtrans();
        $dataOrder = BackInShape::where('kode', $id)->first();
        $dataOrder->order_name = 'Back In Shape V2';
        
        $data = [
            'status' => $dataStatus->getStatusOrder($id),
            'dataOrder' => $dataOrder
        ];
        $order = OrderBisV2::where('order_id', $id)->first();
        if (!$order) {
            // dd($data);
            if ($data['status']['status_code'] == 404) {
                return redirect()->route('order.notData');
            } else {
                $order = OrderBisV2::create([
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
        if ($order->status !== $data['status']['transaction_status']) {
            // echo "rubah status";
            OrderBisV2::where('order_id', $order->order_id)
                ->update([
                    'status' => $data['status']['transaction_status'],
                    'json_midtrans' => json_encode($data['status'])
                ]);
        }
        // dd($data);
        return view("public/promo/back-in-shape/status", $data);
    }

    public function generate()
    {
        return view("public/promo/back-in-shape/generate");
    }

    public function updateKode(Request $request)
    {
        $clubs = $this->apiModels->allClubs()['rows'];
        // $member = $this->apiModels->getMember($request->email);
        $dataBis = BackInShape::where('email', $request->email)->first();
        // if ($member) {
        //     foreach ($member as $key => $row) {
        //         if ($row['email'] === $request->email) {
        //             $member['email'] = $row['email'];
        //         }
        //     }
        // } 
        // if (isset($member['email'])) {
        //     return redirect()->route('99k.daftar')->withInput()->with('alert', 'Email anda sudah terdaftar sebagai member kami');
        // } elseif (!$dataBis) {
        //     return redirect()->route('99k.daftar')->withInput()->with('alert', 'Email anda belum terdaftar di 99K kami');
        // } else {
        // }
        if (!$dataBis) {
            return redirect()->route('v2.back-in-shape.daftar')->withInput()->with('alert', 'Email anda belum terdaftar di 99K kami');
        }
        $clubs_kode = $this->apiModels->allClubs($dataBis->club_id);
        $newKode = $dataBis->kode;
        $request->validate([
            'email' => 'required|email',
        ]);
        if ($dataBis->kdRef != '') {
            $newKode = 'BIS-' . $dataBis->kdRef . '-' . date('YmdH') . '-' . rand(100, 999);
        } else {
            $newKode = 'BIS-UA-' . date('YmdH') . '-' . rand(100, 999);
        }
        BackInShape::where('email', $request->email)
                ->update([
                    'kode' => $newKode,
                ]);
        $dataBisUpdate = BackInShape::where('email', $request->email)->first();
        
        $dataBisUpdate->url = url('v2/back-in-shape/proses?kode=') . $dataBisUpdate->kode;
        Mail::to( $request->email )->send(new BisVerifEmail($dataBisUpdate, $clubs));
        return redirect('v2/back-in-shape?kdRef=' . $dataBisUpdate->kdRef)->with('success', 'Kode baru telah dikirim ke email ')->with('email', $dataBis->email);
    }
}