<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmStaffClub;
use App\Mail\SendEmail;
use App\Mail\SendEmailConfirm;
use App\Models\ApiModels;
use App\Models\Sixpack3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // dd($this->apiModels->allClubs()['rows']);
        $dataInvoice = Sixpack3::where('kode', $kode)->first();
        return view("public/content/sixpack3/edit", compact('dataInvoice'), ['clubs' => $this->apiModels->allClubs()['rows']]);
    }

    public function update(Request $request, $kode)
    {
        $request->validate(
            [
                // 'kode' => 'required',
                // 'nama' => 'required',
                // 'club' => 'required',
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
        $request->file('image')->storeAs('sixpack3',$namaImage);
        Sixpack3::where('kode', $kode)
                    ->update([
                        'tanggal' => $request->tanggal,
                        'harga' => $request->nominal,
                        'image' => '/' . $namaImage,
                    ]);
        
        // dd($request);
        $clubs = $this->apiModels->allClubs()['rows'];
        // $dataEmail = Sixpack3::where('kode', $kode)->first();
        $dataEmail = DB::table('sixpack3s')
                    ->join('club_data', 'sixpack3s.club_id', '=', 'club_data.club_id')
                    ->where('kode', $kode)->first();
        $dataEmail->club = null;
        Mail::to( $request->email )->send(new SendEmailConfirm($dataEmail, $clubs));
        Mail::to( $dataEmail->club_email )->send(new ConfirmStaffClub($dataEmail, $clubs));
        return redirect()->route('sixpack3.confirmSend', ['kode'=>$request->kode]);
    }

    public function confirmSend($kode)
    {
        $dataInvoice = Sixpack3::where('kode', $kode)->first();
        $dataInvoice = DB::table('sixpack3s')
                        ->join('club_data', 'sixpack3s.club_id', '=', 'club_data.club_id')
                        ->where('kode', $kode)->first();
        return view("public/member/daftar/confirm_success", compact('dataInvoice'));
    }
}
