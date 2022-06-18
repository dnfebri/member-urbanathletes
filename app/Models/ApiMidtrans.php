<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiMidtrans extends Model
{
    use HasFactory;

    public function midtransConfig()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // \Midtrans\Config::$isSanitized = false;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }

    public function getStatusOrder($id = NULL)
    {
        $this->midtransConfig();

        // $data = \Midtrans\Transaction::status($id);
        // dd($data);
        $header = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode(env('SERVER_KEY') . ':')
        ];
        $data = Http::withHeaders($header)->get('https://api.sandbox.midtrans.com/v2/' . $id . '/status');
        return $data->json();
    }

}
