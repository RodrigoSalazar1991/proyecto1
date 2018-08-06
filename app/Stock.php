<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_stock';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_stock','id_producto','stock_minimo','stock_actual','precio_unitario','estante'];

public $timestamps = false;


}
