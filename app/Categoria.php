<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
      protected $table = 'categorias'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_categoria';   //como va buscar el nombre de id en las funciones

       public $fillable = ['id_catergoria','nombre','descripcion'];

      public $timestamps = false;
}
