<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DataTables\CentroCostoDataTable;
use App\Centro_Costo;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;

class CentroCostoController extends Controller
{
	public function index(CentroCostoDataTable $dataTable)
    {
        return $dataTable->render('centro_costo.index');
    }
    






     public function addcentro(Request $request){

 $rules = array(
                'cnombre_cc' => 'required|unique:centro_costo,nombre_cc|max:255',
               

        );

  $messages = [
        'cnombre_cc.required'    => 'Ingrese por favor centro',
        'cnombre_cc.unique'    => 'el nombre ya existe',

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
           $centro = new Centro_Costo;
        
      $centro->nombre_cc = $request->cnombre_cc;
      $centro->save();
      return response()->json($centro);

        }
    }







     public function editarCentro(Request $request){


 $idb= ($request->eid);

 $rules = array(

              

                             //      (nombretabla,campounicotabla,id,nombredelaid)
                
               
                 'tnombre' =>  'required|unique:centro_costo,nombre_cc,'.$idb.',id_cc'

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
           
 $centro = Centro_Costo::find($request->eid);
  $centro->nombre_cc = $request->tnombre;
  $centro->save();
  return response()->json($centro);

        }
    }



































}
