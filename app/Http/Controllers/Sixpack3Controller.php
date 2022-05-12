<?php

namespace App\Http\Controllers;

use App\Models\ApiModels;
use Illuminate\Http\Request;

class Sixpack3Controller extends Controller
{
    public function __construct()
    {
        $this->apiModels = new ApiModels();
    }
    
    public function daftar()
    {
        return view("public/content/sixpack3/daftar", ['clubs' => $this->apiModels->allClubs()]);
    }
}
