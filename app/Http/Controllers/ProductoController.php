<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\DataTables\ProductoDataTable;
use App\Http\Requests;
use App\Categoria;
use App\Unidad_Medida;
use App\Producto;
use App\Stock;
use Validator;
use App\Http\Controllers\Controller\ValidatesRequests;
use App\Http\Controllers\Controller;
use Session;
use App\http\Requests\Producto\ProductoCreateRequest;
use DB;

class ProductoController extends Controller
{
    

       public function index(ProductoDataTable $dataTable)
    {

    	
        return $dataTable->render('producto.index');
    }



   
 public function create()
    {
       $categoria= Categoria::lists('nombre','id_categoria')->prepend('selecciona un valor', 0);
       $medida= Unidad_Medida::lists('nombre','id_unidadmedida')->prepend('selecciona un valor', 0);
      return view('producto/crear')->with('categoria',$categoria)->with('medida',$medida);
      

    }



public function store(ProductoCreateRequest $request)
    {   

    	 
           
     Producto::create($request->all());


        $post = new Stock;
        
  $id_producto= Producto::all()->last();
$id_ultimo=$id_producto->id_producto;
     $post->id_producto=$id_ultimo;
$post->stock_minimo=0;
$post->stock_actual=0;
 $post->id_cc= 11;
      $post->save();

 $posta = new Stock;
        $id_productox= Producto::all()->last();
$id_ultimox=$id_productox->id_producto;
     $posta->id_producto=$id_ultimox;
$posta->stock_minimo=0;
$posta->stock_actual=0;
 $posta->id_cc= 12;
      $posta->save();
 
        return redirect('ProductoInventario');



    

    /**}
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}



 public function show($id)
    {   
           $Stock =Stock::FindOrFail($id);
           $stock_id=$Stock->id_producto;
            
         $Producto =Producto::FindOrFail($stock_id);
         
        return view('producto/crearstock', array('producto'=>$Producto,'Stock' =>$Stock));
     }



}
