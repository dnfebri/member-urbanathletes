<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class ApiModels extends Model
{
    use HasFactory;

    public function getMember($reques = NULL)
    {
        if ($reques === NULL) {
            // $clubs = Http::get( config('app.url_api') . 'fitness/v1/branch')->json('data');
            return ['Data' => 'Data tidak bisa didapat'];
        } else {
            // $params = 'member/data_entry?page=1&limit=10&sorting=&sorting_type=&keyword=hr@urbanathletes.co.id&v=1654876973982&branch_id=';
            $params =   'fitness/v1/member/data_entry?keyword='. $reques .
                        '&v=' . time() . '&branch_id=';
            $clubs = Http::withHeaders([
                        'x-access-token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyX2lkIjo3MDEsImVtYWlsIjoiaXRAdXJiYW5hdGhsZXRlcy5jby5pZCIsInVzZXJfcm9sZSI6Iml0QHVyYmFuYXRobGV0ZXMuY28uaWQiLCJ1c2VyX3JvbGVfYWNjZXNzX21lbnUiOiJpdEB1cmJhbmF0aGxldGVzLmNvLmlkIiwiaWF0IjoxNjUwOTQ3OTYyfQ.2cQo-CTmDSOvjBeFWNVKyHIsHaTwosl6Oce7BfyfQu8'
                        ])->get( config('app.url_api') . $params)->json('data');
            return $clubs['rows'];   
        }
    }

    public function allClubs($id = NULL)
    {
        if ($id === NULL) {
            $clubs = Http::get( config('app.url_api') . 'fitness/v1/branch')->json('data');
            return $clubs;
        } else {
            $clubs = Http::get( config('app.url_api') . 'fitness/v1/branch/' . $id)->json('data');
            return $clubs;   
        }
        
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
