<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
   
protected $table = 'producto'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_producto';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_producto','nombre','id_categoria','codigo','id_unidadmedida','familia'];

public $timestamps = false;




}
