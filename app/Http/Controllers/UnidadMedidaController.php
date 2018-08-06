<?php

namespace App\Http\Controllers;


use App\DataTables\UsersUnidadMedidaDatatable;
use App\DataTables\CiudadDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Unidad_Medida;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;

class UnidadMedidaController extends Controller
{
    public function index(UsersUnidadMedidaDatatable $dataTable)
    {
        return $dataTable->render('unidad_medida.index');
    }








     public function addunidad(Request $request){

 $rules = array(
                'cunidad' => 'required|unique:unidad_medida,nombre|max:255',
               

        );

  $messages = [
        'cunidad.required'    => 'Ingrese por favor nombre',
        'cunidad.unique'    => 'el nombre ya existe',

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
           $post = new Unidad_Medida;
        
      $post->nombre = $request->cunidad;
      $post->save();
      return response()->json($post);

        }
    }










     public function editarunidad(Request $request){


 $ciudad = ($request->eid);

 $rules = array(

                 'tnombre' =>  'required|unique:unidad_medida,nombre,'.$ciudad.',id_unidadmedida'

                             //      (nombretabla,campounicotabla,id,nombredelaid)
                
               

        );

  $messages = [
     
        'tnombre.unique'    => 'el nombre ya existe',
         'tnombre.required'    => 'Ingrese por favor nombre',
    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
 $unidad = Unidad_Medida::find($request->eid);
  $unidad->nombre = $request->tnombre;
  $unidad->save();
  return response()->json($unidad);

        }
    }























}
