<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Mail\SendEmailConfirm;
use App\Models\ApiModels;
use App\Models\Invoice;
use App\Models\Join;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }

    public function daftar()
    {
        // $clubs = $this->apiModels->allClubs();
        return view("public/member/daftar/daftar", ['clubs' => $this->apiModels->allClubs()]);
        // return view("public/member/daftar/daftar", compact('clubs'));
    }

    public function daftarSave(Request $request)
    {
        $request->validate(
            [
                // 'kode' => 'unique:invoices,kode',
                'club' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:joins,email',
                'alamat' => 'required'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                // 'nomor.required' => 'Jumlah Tps Harus diisi!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );

        $request['kode'] = 'UA' . time() . '-' . rand(100, 999);
        // dd($request->all());
        $join = Join::create($request->all());
        $data = $request->request->all(); // mengambil kode
        $kode = $data['kode'];

        $invoice = Invoice::create([
            'kode' => $kode,
            'club' => $request->club,
            'join_id' => $join->id,
            'harga' => '99000',
            'status' => '0'
        ]);

        
        $dataEmail = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->where('kode', $kode)->first();

        $dataEmail->url = url('daftar/confirm') . '/';
        
        $clubs = $this->apiModels->allClubs()['rows'];
        Mail::to( $join->email )->send(new SendEmail($dataEmail, $clubs));
        // return redirect('/')->with('massage', 'Join ' . $request->nama . ' berhasi ditambahkan');
        return redirect()->route('daftar.send', ['kode' => $kode]);
    }

    public function daftarSend($kode)
    {
        $dataInvoice = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->where('kode', $kode)->first();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
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
                'name' => 'Promo 99k',
               ]
            ),
            'customer_details' => array(
                'name' => $dataInvoice->nama,
                'email' => $dataInvoice->email,
                'phone' => $dataInvoice->nomor,
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Authorization sandbox midtrans
        // $auth = base64_encode(env('SERVER_KEY') . ':');
        // dd($auth);

        return view("public/member/daftar/daftar_send", compact('dataInvoice', 'params'), ['token' => $snapToken]);
    }


    public function daftarConfirmSuccess($kode)
    {
        $dataInvoice = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->join('club_data', 'invoices.club', '=', 'club_data.club_id')
                        ->where('kode', $kode)->first();
        return view("public/member/daftar/confirm_success", compact('dataInvoice'));
    }
}
