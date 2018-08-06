<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    

protected $table = 'proveedores'; //como va buscar con el nombre de tabla
       protected $primaryKey = 'id_proveedor';   //como va buscar el nombre de id en las funciones

    public $fillable = ['id_proveedor','nombre','rut','direccion','id_ciudad','giro','fono','correo','id_cc'];

public $timestamps = false;


public function ciudad() {
        return $this->hasOne('App\Ciudad', 'id_ciudad', 'id_ciudad'); // Le indicamos que se va relacionar con el atributo id
    }
 
public function centro() {
        return $this->hasOne('App\Centro_Costo', 'id_cc', 'id_cc'); // Le indicamos que se va relacionar con el atributo id
    }


}
