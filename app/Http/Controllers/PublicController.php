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
    // public $clubs = Http::get('https://api.urbanathletes.co.id/fitness/v1/branch');
    public function __construct()
    {
        $this->apiClubs = Http::get('https://api.urbanathletes.co.id/fitness/v1/branch');

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
        return view("public/member/daftar/daftar");
    }

    public function daftarSave(Request $request)
    {
        $request->validate(
            [
                'kode' => 'unique:invoices,kode',
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
            'join_id' => $join->id,
            'harga' => '99000',
            'status' => '0'
        ]);

        
        $dataEmail = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->where('kode', $kode)->first();

        Mail::to( $join->email )->send(new SendEmail($dataEmail));
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

    public function daftarConfirm($kode)
    {
        // dd($this->apiClubs->json('data'));
        $clubs = $this->apiClubs->json('data');
        $dataInvoice = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->where('kode', $kode)->first();
        return view("public/member/daftar/daftar_confirm", compact('dataInvoice', 'clubs'));
    }

    public function storeDaftarConfirm(Request $request)
    {
        // dd($request);
        $request->validate(
            [
                // 'kode' => 'required',
                // 'nama' => 'required',
                'club' => 'required',
                'tanggal' => 'required',
                'nominal' => ['required', 'numeric'],
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                'kode.required' => 'Terjadi kesalah, coba reload halaman',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        $namaImage = $request->kode . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('invoice',$namaImage);
        Invoice::where('kode', $request->kode)
                    ->update([
                        'club' => $request->club,
                        'tanggal' => $request->tanggal,
                        'harga' => $request->nominal,
                        'image' => '/' . $namaImage,
                    ]);
        
        $clubs = $this->apiClubs->json('data');
        $dataEmail = DB::table('invoices')
                    ->join('joins', 'invoices.join_id', '=', 'joins.id')
                    ->where('kode', $request->kode)->first();
        Mail::to( $request->email )->send(new SendEmailConfirm($dataEmail, $clubs));
        return redirect()->route('daftar.confirmSuccess');
        // return view('public.ini');
    }

    public function daftarConfirmSuccess()
    {
        return view("public/member/daftar/confirm_success");
    }
}
