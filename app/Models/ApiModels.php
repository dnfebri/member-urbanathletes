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
        $clubs = Http::get('https://api.urbanathletes.co.id/fitness/v1/branch')->json('data');
        return $clubs;
    }
}
