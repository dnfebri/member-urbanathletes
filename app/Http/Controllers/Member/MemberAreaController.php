<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\ApiAuth;
use Illuminate\Http\Request;

class MemberAreaController extends Controller
{
    public function __construct()
    {
        $this->apiAuth = new ApiAuth();
    }

    public function loginForm()
    {
        return view('memberArea.login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                // 'email' => 'required|email|unique:joins,email',
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'kode.unique' => 'Terjadi kesalah, coba reload halaman lagi',
                // 'nomor.required' => 'Jumlah Tps Harus diisi!',
                // 'nomor.numeric' => 'Harus diisi dengan angka!'
            ]
        );
        $dataLogin = $this->apiAuth->member($request->all());
        

        dd($dataLogin);
    }
}
