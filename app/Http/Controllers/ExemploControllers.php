<?php

namespace App\Http\Controllers;

use App\Sensor;
use Illuminate\Support\Facades\DB;


class ExemploController extends Controller
{
    public function showDB()
    {
        //$dados1 = Sensor::get();
        //$graf = new Lavacharts();
        $valor = \Lava::DataTable();
        $valores = Sensor::select('tempAmb')->get();
        $valor->addStringColumn('X')
             ->addNumberColumn('Y')
             ->getRows(['Amb', $valores]);
             \Lava::LineChart('teste', $valor,['title' =>'vaidarbom']);
        print_r($valores);
        return view('freios');
    }
}
//temAmb x ?
//Lava:: é uma função da onde? e o LineChart é o formato do grafico?