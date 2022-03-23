<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Mail\SendEmailConfirm;
use App\Models\Invoice;
use App\Models\Join;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->apiClubs = Http::get('https://api.urbanathletes.co.id/fitness/v1/branch')->json('data');
    }

    public function home()
    {
        // echo "hello word";
        return view("public/index");
    }

    public function daftar()
    {
        // $invoice = Invoice::where('kode', 'UA1647500903')->first();
        // $join = Join::where('id', '1')->first();
        $clubs = $this->apiClubs;
        return view("public/member/daftar/daftar", compact('clubs'));
    }

    public function daftarSave(Request $request)
    {
        $request->validate(
            [
                'kode' => 'unique:invoices,kode',
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

        $clubs = $this->apiClubs['rows'];
        Mail::to( $join->email )->send(new SendEmail($dataEmail, $clubs));
        // return redirect('/')->with('massage', 'Join ' . $request->nama . ' berhasi ditambahkan');
        return redirect()->route('daftar.send', ['kode' => $kode]);
    }

    public function daftarSend($kode)
    {
        $dataInvoice = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->where('kode', $kode)->first();
        return view("public/member/daftar/daftar_send", compact('dataInvoice'));
    }

    public function daftarConfirmSuccess()
    {
        return view("public/member/daftar/confirm_success");
    }
}
