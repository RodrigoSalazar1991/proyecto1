<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleTemporal extends Model
{
   protected $table = 'detalle_temporal'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_detalletemporal';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_detalletemporal','id_producto','cantidad','precio_unitario','subtotal','id_marca','detalle','id'];

public $timestamps = false;




}
