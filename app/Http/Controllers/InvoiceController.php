<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmStaffClub;
use App\Mail\SendEmailConfirm;
use App\Models\ApiMidtrans;
use App\Models\ApiModels;
use App\Models\Invoice;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function edit($kode)
    {
        $clubs = $this->apiModels->allClubs()['rows'];
        $dataInvoice = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->where('kode', $kode)->first();
        return view("public/member/daftar/daftar_confirm", compact('dataInvoice'), ['clubs' => $clubs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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
        $request->file('image')->storeAs('invoice',$namaImage);
        Invoice::where('kode', $request->kode)
                    ->update([
                        'club' => $request->club,
                        'tanggal' => $request->tanggal,
                        'harga' => $request->nominal,
                        'image' => '/' . $namaImage,
                    ]);
        
        $clubs = $this->apiModels->allClubs()['rows'];
        $dataEmail = DB::table('invoices')
                    ->join('joins', 'invoices.join_id', '=', 'joins.id')
                    ->join('club_data', 'invoices.club', '=', 'club_data.club_id')
                    ->where('kode', $request->kode)->first();
        Mail::to( $request->email )->send(new SendEmailConfirm($dataEmail, $clubs));
        Mail::to( $dataEmail->club_email )->send(new ConfirmStaffClub($dataEmail, $clubs));
        return redirect()->route('daftar.confirmSuccess', ['kode'=>$request->kode]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
