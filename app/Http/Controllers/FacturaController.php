<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Proveedores;
use App\Marca;
use App\Producto;
use App\Estado_Pago;
use App\DetalleTemporal;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;


class FacturaController extends Controller
{
    public function index()
    {

    	$idx = Auth::user()->id_cc;
        $us = Auth::user()->id;
      $detalle=DB::table('detalle_temporal')->join('marcas', 'detalle_temporal.id_marca', '=', 'marcas.id_marca')->join('producto', 'producto.id_producto', '=', 'detalle_temporal.id_producto')->select('producto.nombre as nombre','detalle','marcas.nombre as nombrem','cantidad','precio_unitario','subtotal','id','id_detalletemporal')->where('id','=',$us)->get();
               
               


    	  $marca= Marca::lists('nombre','id_marca')->prepend('sin especificar', 0);
        $producto= Producto::lists('nombre','id_producto')->prepend('selecciona un producto', 0);
    	$proveedores= Proveedores::where('id_cc','=',$idx )->lists('nombre','id_proveedor')
               ->prepend('selecciona un valor', 0);

            $estado_pago= Estado_Pago::lists('nombre','id_pago')
               ->prepend('selecciona un valor', 0);



        return view('factura/crear')->with('proveedores',$proveedores)->with('detalle',$detalle)->with('estado_pago',$estado_pago)->with('producto',$producto)->with('marca',$marca);
    }






public function addtemporal(Request $request){

   $comprobar=$request->id_marca;
                     $empleado = Marca::find($comprobar);

$rules = array(  
                     
                            'id_producto' => 'required|not_in:0',
                            'cantidad' => 'required',
                'precio' => 'required',

              
               

        );


  $messages = [
      'id_producto.not_in' => 'Selecciona una producto  es obligatorio',

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
    $idx = Auth::user()->id;

           $post = new DetalleTemporal;
        
       $post->id_marca = $request->id_marca;
        $post->cantidad = $request->cantidad;
         $post->precio_unitario = $request->precio;
          $post->detalle = $request->detalle;
           $post->id_producto = $request->id_producto;
            $post->subtotal = $request->subtotal;
              $post->id = $idx;
      $post->save();



           $post ="hoal";
        
 
      return response()->json($post);

        }













}













public function delatedetalletemporal(Request $request){

 

$rules = array(  
                     

               

        );


  $messages = [
      

    ];

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Response::json(array(

                    'errors' => $validator->getMessageBag()->toArray(),


            ));
        } else {
           
    $data =  $request->id_detalletemporal;
    $delete = DetalleTemporal::where('id_detalletemporal',$data)->delete();

           $post ="hoal";
        
 
      return response()->json($post);

        }





}






}
