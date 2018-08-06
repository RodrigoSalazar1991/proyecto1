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

class StockController extends Controller
{
    

       public function update(Request $request, $id)
    {
        
             
         $this->validate($request, [
        'estante' => 'required',
        'stock_minimo' => 'required',
        'stock_actual' => 'required',
        'precio_unitario' => 'required',
    ]);




     $post = Stock::find($id);
      $post->estante=$request->input('estante'); 
      $post->stock_actual=$request->input('stock_actual'); 
      $post->stock_minimo=$request->input('stock_minimo'); 
      $post->precio_unitario=$request->input('precio_unitario'); 
      $post->save();




        return redirect()->route('ProductoC.index');
    }









}
