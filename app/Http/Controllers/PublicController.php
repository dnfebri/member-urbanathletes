<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Join;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        // echo "hello word";
        return view("public/index");
    }

    public function daftar()
    {
        return view("public/member/daftar");
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
            // [
            //     'nama.required' => 'Nama Desa Harus diisi!',
            //     'nomor.required' => 'Jumlah Tps Harus diisi!',
            //     'nomor.numeric' => 'Harus diisi dengan angka!'
            // ]
        );

        // dd($request->all());
        $join = Join::create($request->all());
        // dd($join->id); mengambil id dari create join
        $data = $request->request->all(); // mengambil kode
        $kode = $data['kode'];

        $invoice = Invoice::create([
            'kode' => $kode,
            'join_id' => $join->id,
            'harga' => '99000',
            'status' => '0'
        ]);
        dump($join);
        dd($invoice);
        // return redirect('/')->with('massage', 'Join ' . $request->nama . ' berhasi ditambahkan');
        // return redirect()->route('daftar.send', ['kode' => $kode]);
    }

    public function daftarSend($kode)
    {
        // dump($kode);
        // dump(date('d/M/y'));
        // dd('daftar send');
        return view("public/member/daftar_send");
    }
}
