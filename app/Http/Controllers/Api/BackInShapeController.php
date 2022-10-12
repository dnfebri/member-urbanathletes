<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Http\Resources\BackInShapeCollection;
use App\Models\BackInShape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackInShapeController extends Controller
{
    public function getAll()
    {
        // dd(strtolower("Hello WORLD."));
        $data = BackInShape::orderByDesc('id')->get();
        $dataResource = BackInShapeCollection::collection($data);
        // dd($dataResource);
        if ($data) {
            return ApiFormatter::createApi(200, 'success', $dataResource);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
        // return response()->json($dataResource, 200);
    }

    public function order()
    {
        // $data = OrderBisV2::whereColumn('order_id', 'back_in_shapes.kode')->orderByDesc('id')->get();
        $data = DB::table('order_bis_v2_s')
                ->join('back_in_shapes', 'order_bis_v2_s.order_id', '=', 'back_in_shapes.kode')
                ->select(
                    'order_bis_v2_s.id', 
                    'order_bis_v2_s.order_name', 
                    'order_bis_v2_s.order_id', 
                    'back_in_shapes.nama', 
                    'back_in_shapes.email', 
                    'back_in_shapes.kdRef', 
                    'back_in_shapes.promo',
                    'order_bis_v2_s.gross_amount', 
                    'order_bis_v2_s.status', 
                    'order_bis_v2_s.transaction_id', 
                    'order_bis_v2_s.payment_type', 
                    'order_bis_v2_s.created_at'
                    )
                ->orderBy('id', 'desc')
                ->get();
        // dd($data);
        return response()->json($data, 200);
    }
}
