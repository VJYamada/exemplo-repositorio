<?php

namespace App\Imports;

use App\Sensor; //chamando biblioteca
use Maatwebsite\Excel\Concerns\ToModel;

class SuperImport implements ToModel
{

    @param array $row

    @return \Illuminate\Database\Eloquent\Model|null //?

    public function model(array $row)
    {

        
    if($row[0] != ''){
        return new Sensor([
            'Sensorinfo1'  => $row[1], 
            'Sensorinfo2' => $row[2],
            'Sensorinfo3' => $row[3],
        ]);
    }           
    }
}