<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiModels extends Model
{
    use HasFactory;

    public function allClubs()
    {
        $clubs = Http::get( config('app.url_api') . 'fitness/v1/branch')->json('data');
        return $clubs;
    }

    public function membership($id = NULL)
    {
        if ($id === NULL) {
            // $urlapi = config('app.url_api');
            // dd($urlapi);
            $data = Http::get( config('app.url_api') . 'fitness/v1/membership?is_show_mobile=1')->json('data');
            return $data;
        } else {
            $data = Http::get( config('app.url_api') . 'fitness/v1/membership/'. $id )->json('data');
            return $data;
        }
    }
}
