<?php

namespace App\Http\Controllers;

use App\Mail\BisVerifEmail;
use App\Models\ApiModels;
use App\Models\BackInShape;
use App\Models\DataStatict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackInShapeController extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
        $this->dataStatict = new DataStatict();
    }
    
    public function index($kdref = 'null')
    {
        return view("public/promo/back-in-shape/index", ['kdRef' => $kdref]);
    }

    public function daftar(Request $request)
    {
        if(empty($request->kdRef)) {
            // dd($request);
            return view("public/promo/back-in-shape/index", ['kdRef' => 'ua']);
        }
        // dd($request);
        $kdRef = $request->kdRef;
        return view("public/promo/back-in-shape/daftar", ['kdRef' => $kdRef, 'clubs' => $this->apiModels->allClubs()]);
    }

    public function save(Request $request)
    {
        $clubs = $this->apiModels->allClubs()['rows'];
        $kdRef = '';
        $harga = 0;
        $request->validate(
            [
                // 'kode' => 'unique:invoices,kode',
                // 'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:back_in_shapes,email',
                'noKtp' => 'required',
                'alamat' => 'required',
                'promo' => 'required'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                // 'nomor.required' => 'Jumlah Tps Harus diisi!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );

        foreach ($this->dataStatict->PromoBisV2() as $key => $kdp) {
            if ($kdp['id'] == $request->kdRef) {
                $kdRef = $kdp['id'];
            }
        }

        if ($kdRef != '') {
            $request['kode'] = 'BIS-' . $request->kdRef . '-' . date('YmdH') . '-' . rand(100, 999);
        } else {
            $request['kode'] = 'BIS-' . date('YmdH') . '-' . rand(100, 999);
        }

        if($request->promo == 1) {$harga = 488000;}
        if($request->promo == 2) {$harga = 988000;}
        
        $datareq = $request->all();
        $datareq += array(
            'harga' => $harga,
            'status' => '0'
        );
        $Bis = BackInShape::create($datareq);
        // dd($Bis);
        $Bis->url = url('v2/back-in-shape/proses?kode=') . $Bis->kode;
        
        Mail::to( $Bis->email )->send(new BisVerifEmail($Bis, $clubs));
        return redirect('v2/back-in-shape?kdRef=' . $request->kdRef)->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $Bis->email);
        // dump($this->dataStatict->PromoBisV2());
        // dd($request);
    }

    public function proses(Request $request)
    {
        $dataReq = BackInShape::where('kode', $request->kode)->first();
        dd($dataReq);
    }
}