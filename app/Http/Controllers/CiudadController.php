<?php

namespace App\Http\Controllers;
use App\DataTables\CiudadDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Ciudad;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;

class CiudadController extends Controller
{
    public function index(CiudadDataTable $dataTable)
    {
        return $dataTable->render('ciudad.ciudad');
    }





     public function addCiudad(Request $request){

 $rules = array(
                'cciudad' => 'required|unique:ciudad,nombre_ciudad|max:255',
              
        );

  $messages = [
        'cciudad.required'    => 'Ingrese por favor nombre',
        'cciudad.unique'    => 'el nombre ya existe',

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
           $post = new Ciudad;
        
       $post->nombre_ciudad = $request->cciudad;
      $post->save();
      return response()->json($post);

        }
    }





     public function editarCiudad(Request $request){


 $ciudad = ($request->eid);

 $rules = array(

                 'tnombre' =>  'required|unique:ciudad,nombre_ciudad,'.$ciudad.',id_ciudad'

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
           
 $ciudad = Ciudad::find($request->eid);
  $ciudad->nombre_ciudad = $request->tnombre;
  $ciudad->save();
  return response()->json($ciudad);

        }
    }


















}
