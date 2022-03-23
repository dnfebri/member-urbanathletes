<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailConfirm;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->apiClubs = Http::get('https://api.urbanathletes.co.id/fitness/v1/branch');
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        // dd($this->apiClubs->json('data'));
        $clubs = $this->apiClubs->json('data');
        $dataInvoice = DB::table('invoices')
                        ->join('joins', 'invoices.join_id', '=', 'joins.id')
                        ->where('kode', $kode)->first();
        return view("public/member/daftar/daftar_confirm", compact('dataInvoice', 'clubs'));
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
        
        $clubs = $this->apiClubs->json('data');
        $dataEmail = DB::table('invoices')
                    ->join('joins', 'invoices.join_id', '=', 'joins.id')
                    ->where('kode', $request->kode)->first();
        Mail::to( $request->email )->send(new SendEmailConfirm($dataEmail, $clubs));
        return redirect()->route('daftar.confirmSuccess');
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
