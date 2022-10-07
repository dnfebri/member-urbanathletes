<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataStatict extends Model
{
    use HasFactory;

    public function PromoBisV2()
    {
        $data = [
            ['id'=> '100', 'name'=> 'si A'],
            ['id'=> '101', 'name'=> 'si B'],
            ['id'=> '102', 'name'=> 'si C'],
        ];
        return $data;
    }
}
