<?php

namespace App\Http\Requests\Producto;

use App\Http\Requests\Request;

class ProductoCreateRequest extends Request
{
    
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the re
     *
     * @return array
     */
    public function rules()
    {
        return [
            
                  'familia' => 'required|not_in:0',
                  'nombre' => 'required|unique:producto,nombre|min:2',
                 'codigo' => 'required|unique:producto,codigo|min:2',
                  'id_unidadmedida' => 'required|not_in:0',
                     'id_categoria' => 'required|not_in:0',
              
           





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
