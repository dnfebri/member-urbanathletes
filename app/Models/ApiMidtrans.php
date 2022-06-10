<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiMidtrans extends Model
{
    use HasFactory;

    public function getStatusOrder($id = NULL)
    {
        $header = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ' . base64_encode(env('SERVER_KEY') . ':')
        ];
        $data = Http::withHeaders($header)->get('https://api.sandbox.midtrans.com/v2/' . $id . '/status');
        return $data->json();
    }

}
