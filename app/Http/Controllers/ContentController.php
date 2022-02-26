<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        // echo "hello word";
        return view("public/content/index");
    }
}
