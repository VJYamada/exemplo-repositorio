<?php
// criando biblioteca
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Sensor extends Model
{
    use Notifiable;


    @var array

    protected $fillable = [
        'Sensorinfo1','Sensorinfo2','Sensorinfo3',
    ];


    @var array
    protected $hidden = [
        
    ];

    @var array

    protected $casts = [
        
    ];
}