<?php

namespace App\Http\Controllers;

use App\Models\ApiModels;
use Illuminate\Http\Request;

class BackInShapeController extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }
    
    public function index($kode = null)
    {
        return view("public/promo/back-in-shape/index", ['kode' => $kode]);
    }

    public function daftar(Request $request)
    {
        $kode = $request->kode;
        return view("public/promo/back-in-shape/daftar", ['kode' => $kode, 'clubs' => $this->apiModels->allClubs()]);
    }
}