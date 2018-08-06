<?php

namespace App\Http\Requests\Proveedores;



use App\Http\Requests\Request;
use Illuminate\Routing\Route;

use Illuminate\Validation\Rule;




class ProveedoresUpdate extends Request
{
    




    public function __construct(Route $route)
    {
        $this->route= $route;
    }



    public function authorize()
    {
       return true;
    }




    public function rules()
    {
        return [
            
                 
               
                  'rut'=>   'required|cl_rut',
                 'nombre' => 'required|min:2',
                 'direccion' => 'required',
                 'fono' => 'numeric|required|min:8|',
                'id_ciudad' => 'required|not_in:0',
                     'id_cc' => 'required|not_in:0',
                 'giro' => 'required'
           





        ];
    }


           public function messages()
    {
        return [
            
          'rut.required' => 'El rut es obligatorio',
            'rut.unique'=> 'el rut ya existe',
             'nombre.required' => 'El nombre  es obligatorio',
             'nombre.min' => 'El nombre  es muy corto',
              'direccion.required' => 'La direccion es obligatorio',
               'fono.required' => 'El telefono es obligatorio',
               'fono.numeric' => 'El telefono contiene letras',
            'id_ciudad.not_in' => 'Selecciona una ciudad  es obligatorio',
                'id_cc.not_in' => 'Selecciona un centro es obligatorio',



        ];
    }







}
