<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiAuth extends Model
{
    use HasFactory;

    public function member($data = NULL)
    {
        $url =  config('app.url_api') . 'vendor/v1/auth/member';
        // $url = 'http://localhost/vendor/v1/auth/member';
        $memberLog = Http::post( $url, [
            'email' => $data['email'],
            'password' => $data['password']
        ])->json();
        // dd($memberLog);
        return $memberLog;
    }
}
