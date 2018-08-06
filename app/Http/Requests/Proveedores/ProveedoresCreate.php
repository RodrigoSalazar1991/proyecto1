<?php

namespace App\Http\Requests\Proveedores;

use App\Http\Requests\Request;

class ProveedoresCreate extends Request
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
            
                
               
                 'rut' => 'required|max:15|cl_rut',
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
