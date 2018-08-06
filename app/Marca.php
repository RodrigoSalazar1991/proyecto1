<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
   
    
  protected $table = 'marcas'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_marca';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_marca','nombre'];

public $timestamps = false;



}
