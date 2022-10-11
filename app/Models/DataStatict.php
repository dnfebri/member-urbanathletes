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
            ['id'=> 'BIS1', 'name'=> 'Markom'],
            ['id'=> 'BIS2', 'name'=> 'Sosmed'],
            ['id'=> '101', 'name'=> 'Rio'],
            ['id'=> '102', 'name'=> 'Dening'],
            ['id'=> '103', 'name'=> 'Julia'],
            ['id'=> '104', 'name'=> 'Yohanes'],
            ['id'=> '105', 'name'=> 'Fariz']
        ];
        return $data;
    }
}
