<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_Pago extends Model
{
   protected $table = 'estado_pago'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_pago';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_pago','nombre'];

public $timestamps = false;



}
