<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\EstadoPagoDataTable;
use App\Http\Requests;
use App\Estado_Pago;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;
class EstadoPagoController extends Controller
{
   public function index(EstadoPagoDataTable $dataTable)
    {
        return $dataTable->render('estado_pago.index');
    }




     

     public function addestadopago(Request $request){

 $rules = array(
                'cestado' => 'required|unique:estado_pago,nombre|max:255',
               

        );

  $messages = [
        'cestado.required'    => 'Ingrese por favor nombre',
        'cestado.unique'    => 'el nombre ya existe',

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
           $post = new Estado_Pago;
        
      $post->nombre = $request->cestado;
      $post->save();
      return response()->json($post);

        }
    }




        
     public function editarpagoestado(Request $request){


 $ciudad = ($request->eid);

 $rules = array(

                 'tnombre' =>  'required|unique:estado_pago,nombre,'.$ciudad.',id_pago'

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
           
 $ciudad = Estado_Pago::find($request->eid);
  $ciudad->nombre = $request->tnombre;
  $ciudad->save();
  return response()->json($ciudad);

        }
    }









}
