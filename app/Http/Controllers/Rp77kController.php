<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\ApiMidtrans;
use App\Models\ApiModels;
use App\Models\Rp77k;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Rp77kController extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }

    public function daftar()
    {
        // return view("public/content/77k/daftar", ['clubs' => $this->apiModels->allClubs()]);
        return redirect('/');
    }

    public function save(Request $request)
    {
        $member = $this->apiModels->getMember($request->email);
        if ($member) {
            foreach ($member as $key => $row) {
                if ($row['email'] === $request->email) {
                    $member['email'] = $row['email'];
                }
            }
        } 
        if (isset($member['email'])) {
            return redirect()->route('77k.daftar')->withInput()->with('alert', 'Email anda sudah terdaftar sebagai member kami');
        }
        $request->validate(
            [
                // 'kode' => 'unique:invoices,kode',
                'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:rp77ks,email',
                // 'alamat' => 'required'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                // 'nomor.required' => 'Jumlah Tps Harus diisi!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        // dd($request);
        $clubs = $this->apiModels->allClubs()['rows'];
        $clubs_kode = $this->apiModels->allClubs($request->club_id);

        $request['kode'] = 'UA77k-' . date('YmdHi') . $clubs_kode['codename'] . rand(10, 99);
        $datareq = $request->all();
        $datareq += array(
            // 'kode' => '123',
            'harga' => '77000',
            'status' => '0'
        );
        $rp77k = Rp77k::create($datareq);
        $rp77k->url = url('77k/proses?kode=');
        
        Mail::to( $rp77k->email )->send(new SendEmail($rp77k, $clubs));
        // return redirect('/')->with('massage', 'Join ' . $request->nama . ' berhasi ditambahkan');
        // return redirect()->route('77k.proses', ['kode' => $rp77k->kode]);
        return redirect()->route('77k.daftar')->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $rp77k->email);
    }

    public function generate()
    {
        return view("public/content/77k/generate");
    }

    public function updateKode(Request $request)
    {
        $clubs = $this->apiModels->allClubs()['rows'];
        $member = $this->apiModels->getMember($request->email);
        $rp77k = Rp77k::where('email', $request->email)->first();
        if ($member) {
            foreach ($member as $key => $row) {
                if ($row['email'] === $request->email) {
                    $member['email'] = $row['email'];
                }
            }
        } 
        if (isset($member['email'])) {
            return redirect()->route('77k.daftar')->withInput()->with('alert', 'Email anda sudah terdaftar sebagai member kami');
        } elseif (!$rp77k) {
            return redirect()->route('77k.daftar')->withInput()->with('alert', 'Email anda belum terdaftar di 77k kami');
        } else {
            $clubs_kode = $this->apiModels->allClubs($rp77k->club_id);
            $request->validate([
                'email' => 'required|email',
            ]);
            Rp77k::where('email', $request->email)
                    ->update([
                        'kode' => 'UA77k' . date('YmdHi') . $clubs_kode['codename'] . rand(10, 99),
                    ]);
            $rp77kUpdate = Rp77k::where('email', $request->email)->first();
            $rp77kUpdate->url = url('77k/proses?kode=');
            Mail::to( $request->email )->send(new SendEmail($rp77kUpdate, $clubs));
            return redirect()->route('77k.daftar')->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $rp77k->email);
        }
    }

    public function proses(Request $request)
    {
        $dataInvoice = Rp77k::where('kode', $request->kode)->first();
        if (!$dataInvoice) {
            return view("public/member/daftar/order/notData");
        }

        $midtrans = new ApiMidtrans();
        $midtrans->midtransConfig();

        // $order = \Midtrans\Transaction::status($request->kode);
        $order = $midtrans->getStatusOrder($request->kode);
        if ($order['status_code'] != 404) {
            // dd($order);
            return redirect()->route('order.status', ['id' => $order['order_id']]);
        }
        // dd($dataInvoice);
        
        $params = array(
            'transaction_details' => array(
                'order_id' => $dataInvoice->kode,
                'gross_amount' => '',
            ),
            'item_details' => array(
               [
                'id' => $dataInvoice->id,
                'price' => $dataInvoice->harga,
                'quantity' => 1,
                'name' => 'Promo 77k',
               ]
            ),
            'customer_details' => array(
                'first_name' => $dataInvoice->nama,
                'last_name' => '',
                'email' => $dataInvoice->email,
                'phone' => $dataInvoice->nomor,
            ),
            // "enabled_payments" => ["bri_epay", "echannel",
            // "bni_va", "bri_va", "gopay"],
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view("public/content/77k/proses", compact('dataInvoice', 'params'), ['token' => $snapToken]);
    }

}
