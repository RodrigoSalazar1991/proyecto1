<?php

namespace App\Http\Controllers;

use App\DataTables\MarcaDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Marca;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;


class MarcaController extends Controller
{
    
        	public function index(MarcaDataTable $dataTable)
    {
        return $dataTable->render('marca.index');
    }
    


  


     public function addmarca(Request $request){

 $rules = array(
                'cmarca' => 'required|unique:marcas,nombre|max:255',
               

        );

  $messages = [
        'cmarca.required'    => 'Ingrese por favor nombre',
        'cmarca.unique'    => 'el nombre ya existe',

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
           $post = new Marca;
        
      $post->nombre = $request->cmarca;
      $post->save();
      return response()->json($post);

        }
    }












     public function editarmarca(Request $request){


 $ciudad = ($request->eid);

 $rules = array(

                 'tnombre' =>  'required|unique:marcas,nombre,'.$ciudad.',id_marca'

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
           
 $ciudad = Marca::find($request->eid);
  $ciudad->nombre = $request->tnombre;
  $ciudad->save();
  return response()->json($ciudad);

        }
    }














}
