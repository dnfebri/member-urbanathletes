<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rp99k;
use Illuminate\Http\Request;

class Rp99kControllerApi extends Controller
{
    public function getAll(Request $request)
    {
        $search = $request->keyword;
        $rp99k = new Rp99k();
        $data = $rp99k->getIndex($search)->paginate(10);
        return response()->json($data, 200);
    }
}
