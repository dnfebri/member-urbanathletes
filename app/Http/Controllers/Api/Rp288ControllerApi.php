<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApiModels;
use App\Models\Rp288;
use Illuminate\Http\Request;

class Rp288ControllerApi extends Controller
{
    public function getAll(Request $request)
    {
        $apiModels = new ApiModels();
        $clubs = $apiModels->allClubs();
        $search = $request->keyword;
        $rp99k = new Rp288();
        $data = $rp99k->getIndex($search)->paginate(10);
        return response()->json(["data" => $data, "clubs" => $clubs['rows']], 200);
    }
}
