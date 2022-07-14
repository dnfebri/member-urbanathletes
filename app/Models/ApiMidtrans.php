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
        
        // Buat pengkondisian di sini =============================>>>>
        if (env('MIDTRANS_Production') == true) {
            \Midtrans\Config::$isProduction = true;
            \Midtrans\Config::$isSanitized = false;
        } else {
            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
        }
        

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
        $data = Http::withHeaders($header)->get( env('API_URL_MIDTRANS_GET') . $id . '/status');
        return $data->json();
    }

}
