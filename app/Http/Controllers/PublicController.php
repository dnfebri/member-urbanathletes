<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Mail\SendEmailConfirm;
use App\Models\ApiModels;
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
        $this->apiModels = new ApiModels();
    }

    public function home()
    {
        // echo "hello word";
        return view("public/index");
    }

    public function aboutus()
    {
        // echo "hello word";
        return view("public/about/aboutus");
    }

    public function termsConditions()
    {
        return view("public/about/terms-conditions");
    }

    public function theValor()
    {
        return view("public/program/the-valor");
    }

    public function personalTraining()
    {
        return view("public/program/personal-training");
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
        return view("public/member/daftar/daftar_send", compact('dataInvoice'));
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
