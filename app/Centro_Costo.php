<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centro_Costo extends Model
{
     protected $table = 'centro_costo'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_cc';   //como va buscar el nombre de id en las funciones

       public $fillable = ['id_cc','nombre_cc'];

      public $timestamps = false;
}
