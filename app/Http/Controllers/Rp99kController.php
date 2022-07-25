<?php

namespace App\Http\Controllers;

Use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\ConfirmStaffClub;
use App\Mail\SendEmail;
use App\Mail\SendEmailConfirm;
use App\Models\ApiMidtrans;
use App\Models\ApiModels;
use App\Models\Orders;
use App\Models\Rp99k;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Rp99kController extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }

    public function daftar()
    {
        // dd(date('YmdHi'));
        return view("public/content/99k/daftar", ['clubs' => $this->apiModels->allClubs()]);
    }

    public function generate()
    {
        return view("public/content/99k/generate");
    }

    public function updateKode(Request $request)
    {
        $clubs = $this->apiModels->allClubs()['rows'];
        $member = $this->apiModels->getMember($request->email);
        $rp99k = Rp99k::where('email', $request->email)->first();
        if ($member) {
            foreach ($member as $key => $row) {
                if ($row['email'] === $request->email) {
                    $member['email'] = $row['email'];
                }
            }
        } 
        if (isset($member['email'])) {
            return redirect()->route('99k.daftar')->withInput()->with('alert', 'Email anda sudah terdaftar sebagai member kami');
        } elseif (!$rp99k) {
            return redirect()->route('99k.daftar')->withInput()->with('alert', 'Email anda belum terdaftar di 99K kami');
        } else {
            $clubs_kode = $this->apiModels->allClubs($rp99k->club_id);
            $request->validate([
                'email' => 'required|email',
            ]);
            Rp99k::where('email', $request->email)
                    ->update([
                        'kode' => 'UA' . date('YmdHi') . $clubs_kode['codename'] . rand(100, 999),
                    ]);
            $rp99kUpdate = Rp99k::where('email', $request->email)->first();
            $rp99kUpdate->url = url('99k/proses') . '/';
            Mail::to( $request->email )->send(new SendEmail($rp99kUpdate, $clubs));
            return redirect()->route('99k.daftar')->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $rp99k->email);
        }
    }

    public function daftarSave(Request $request)
    {
        $member = $this->apiModels->getMember($request->email);
        if ($member) {
            foreach ($member as $key => $row) {
                if ($row['email'] === $request->email) {
                    $member['email'] = $row['email'];
                }
            }
        } 
        if (isset($member['email'])) {
            return redirect()->route('99k.daftar')->withInput()->with('alert', 'Email anda sudah terdaftar sebagai member kami');
        }
        $request->validate(
            [
                // 'kode' => 'unique:invoices,kode',
                'club_id' => 'required',
                'nama' => 'required',
                'nomor' => ['required', 'numeric'],
                'email' => 'required|email|unique:rp99ks,email',
                // 'alamat' => 'required'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                // 'nomor.required' => 'Jumlah Tps Harus diisi!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        // dd($request);
        $clubs = $this->apiModels->allClubs()['rows'];
        $clubs_kode = $this->apiModels->allClubs($request->club_id);

        $request['kode'] = 'UA' . date('YmdHi') . $clubs_kode['codename'] . rand(100, 999);
        $datareq = $request->all();
        $datareq += array(
            // 'kode' => '123',
            'harga' => '99000',
            'status' => '0'
        );
        $rp99k = Rp99k::create($datareq);
        $rp99k->url = url('99k/proses') . '/';
        
        Mail::to( $rp99k->email )->send(new SendEmail($rp99k, $clubs));
        // return redirect('/')->with('massage', 'Join ' . $request->nama . ' berhasi ditambahkan');
        // return redirect()->route('99k.proses', ['kode' => $rp99k->kode]);
        return redirect()->route('99k.daftar')->with('success', 'Silahkan cek Email yang kami kirim ke ')->with('email', $rp99k->email);
    }

    public function proses($kode)
    {
        $dataInvoice = Rp99k::where('kode', $kode)->first();
        if (!$dataInvoice) {
            return view("public/member/daftar/order/notData");
        }

        $midtrans = new ApiMidtrans();
        $midtrans->midtransConfig();

        // $order = \Midtrans\Transaction::status($kode);
        $order = $midtrans->getStatusOrder($kode);
        if ($order['status_code'] != 404) {
            // dd($order);
            return redirect()->route('order.status', ['id' => $order['order_id']]);
        }
        // dd($dataInvoice);
        
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
                'first_name' => $dataInvoice->nama,
                'last_name' => '',
                'email' => $dataInvoice->email,
                'phone' => $dataInvoice->nomor,
            ),
            // "enabled_payments" => ["bri_epay", "echannel",
            // "bni_va", "bri_va", "gopay"],
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // dd($snapToken);
        return view("public/content/99k/proses", compact('dataInvoice', 'params'), ['token' => $snapToken]);
    }

    public function edit($kode)
    {
        // dd($kode);
        $dataInvoice = Rp99k::where('kode', $kode)->first();
        return view("public/content/99k/daftar_confirm", compact('dataInvoice'), ['clubs' => $this->apiModels->allClubs()['rows']]);
    }
    
    public function update(Request $request, $kode)
    {
        $request->validate(
            [
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
        $request->file('image')->storeAs('99k',$namaImage);
        Rp99k::where('kode', $kode)
                    ->update([
                        'tanggal' => $request->tanggal,
                        'harga' => $request->nominal,
                        'image' => '/'. '99k/' . $namaImage,
                    ]);
        
        // dd($request);
        $clubs = $this->apiModels->allClubs()['rows'];
        // $dataEmail = Sixpack3::where('kode', $kode)->first();
        $dataEmail = DB::table('rp99ks')
                    ->join('club_data', 'rp99ks.club_id', '=', 'club_data.club_id')
                    ->where('kode', $kode)->first();
        $dataEmail->club = null;
        Mail::to( $request->email )->send(new SendEmailConfirm($dataEmail, $clubs));
        Mail::to( $dataEmail->club_email )->send(new ConfirmStaffClub($dataEmail, $clubs));
        return redirect()->route('99k.confirmSend', ['kode'=>$request->kode]);
    }

    public function confirmSend($kode)
    {
        // $dataInvoice = Rp99k::where('kode', $kode)->first();
        $dataInvoice = DB::table('rp99ks')
                        ->join('club_data', 'rp99ks.club_id', '=', 'club_data.club_id')
                        ->where('kode', $kode)->first();
        return view("public/member/daftar/confirm_success", compact('dataInvoice'));
    }
}
