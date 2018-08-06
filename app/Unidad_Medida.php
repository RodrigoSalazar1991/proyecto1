<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad_Medida extends Model
{
   
  protected $table = 'unidad_medida'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_unidadmedida';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_unidadmedida','nombre'];

public $timestamps = false;


}
