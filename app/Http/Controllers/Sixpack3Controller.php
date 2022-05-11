<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\ApiModels;
use App\Models\Sixpack3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Sixpack3Controller extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }
    
    public function daftar()
    {
        return view("public/content/sixpack3/daftar", ['clubs' => $this->apiModels->allClubs()]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'kode' => 'unique:sixpack3s,kode',
                'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:sixpack3s,email',
                'alamat' => 'required'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                'club_id.required' => 'Pilih Club!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        $datareq = $request->all();
        $datareq += array(
            'kode' => '123',
            'harga' => '1488000',
            'status' => '0'
        );
        $sixpack3s = Sixpack3::create($datareq);
        $sixpack3s->url = url('sixpack-3/confirm') . '/';

        $clubs = $this->apiModels->allClubs()['rows'];
        Mail::to( $sixpack3s->email )->send(new SendEmail($sixpack3s, $clubs));
        return redirect()->route('sixpack3.send', ['kode' => $sixpack3s->kode]);
    }

    public function send($kode)
    {
        $dataInvoice = Sixpack3::where('kode', $kode)->first();
        return view("public/content/sixpack3/send", compact('dataInvoice'));
    }

    public function edit($kode)
    {
        dd('ini konfirm sixpack 3'. $kode);
    }
}
