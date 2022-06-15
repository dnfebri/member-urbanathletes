<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        // return view("public/content/index");
        return redirect()->route('99k.index');
        // return redirect('/99k');
    }
}
