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
            ['id'=> 'UAxRio', 'name'=> 'Rio'],
            ['id'=> 'UAxDening', 'name'=> 'Dening'],
            ['id'=> 'UAxJulia', 'name'=> 'Julia'],
            ['id'=> 'UAxYohanes', 'name'=> 'Yohanes'],
            ['id'=> 'UAxFariz', 'name'=> 'Fariz'],
            ['id'=> 'UrbanAthletes', 'name'=> 'Urban Athletes']
        ];
        return $data;
    }
}
