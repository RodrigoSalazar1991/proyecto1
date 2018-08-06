<?php

namespace App\Http\Controllers;



use App\DataTables\CategoriaDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categoria;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;




class CategoriaController extends Controller
{
    
    public function index(CategoriaDataTable $dataTable)
    {
        return $dataTable->render('categoria.index');
    }



   




     public function editarcategoria(Request $request){


 $ciudad = ($request->eid);

 $rules = array(

                 'nj' =>  'required|unique:categorias,nombre,'.$ciudad.',id_categoria',


                             //      (nombretabla,campounicotabla,id,nombredelaid)
                  'rp' => 'required',
                
               

        );

  $messages = [
     
        'nj.unique'    => 'el nombre ya existe',
         'nj.required'    => 'Ingrese por favor nombre',
         'rp.required'    => 'Ingrese por favor descripción',
    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
 $ciudad = Categoria::find($request->eid);
  $ciudad->nombre = $request->nj;
    $ciudad->descripcion = $request->rp;
  $ciudad->save();
  return response()->json($ciudad);

        }
    }






     public function addcategoria(Request $request){

 $rules = array(
                'crearnombre' => 'required|unique:centro_costo,nombre_cc|max:255',
                 'descripcion' => 'required',

        );

  $messages = [
        'crearnombre.required'    => 'Ingrese por favor nombre',
        'crearnombre_cc.unique'    => 'el nombre ya existe',

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
           $categoria = new Categoria;
        
      $categoria->nombre = $request->crearnombre;
       $categoria->descripcion = $request->descripcion;
      $categoria->save();
      return response()->json($categoria);

        }
    }







}
