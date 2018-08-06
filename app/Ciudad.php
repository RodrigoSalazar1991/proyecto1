<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
     protected $table = 'ciudad'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_ciudad';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_ciudad','nombre_ciudad'];

public $timestamps = false;

}
