<?php

namespace App\Http\Controllers;


use App\DataTables\ProveedorDatatable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Proveedores;
use App\Centro_Costo;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Route;
use App\Ciudad;
use Session;
use App\http\Requests\Proveedores\ProveedoresCreate;
use App\http\Requests\Proveedores\ProveedoresUpdate;



class ProveedoresController extends Controller
{
    

 public function index(ProveedorDatatable $dataTable)
    {
        return $dataTable->render('proveedores.index');
    }


 public function create()
    {
       $centro= Centro_Costo::lists('nombre_cc','id_cc')->prepend('selecciona un valor', 0);
       $ciudad= Ciudad::lists('nombre_ciudad','id_ciudad')->prepend('selecciona un valor', 0);
      return view('proveedores/crear')->with('ciudad',$ciudad)->with('centro',$centro);
      

    }



public function store(ProveedoresCreate $request)
    {   
                
           
     Proveedores::create($request->all());
         Session::flash('save','Se ha creado correctamente');
        return redirect('ProveedoresC');
    

    /**}
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}


    public function edit($id)
    {
       $centros = Centro_Costo::lists('nombre_cc','id_cc')->prepend('selecciona un valor', 0);;
       $ciudad = Ciudad::lists('nombre_ciudad','id_ciudad')->prepend('selecciona un valor', 0);;
        $Proveedores = Proveedores::FindOrFail($id);

        return view('proveedores/editar', array('centros'=>$centros,'ciudad'=>$ciudad,'Proveedores'=>$Proveedores));
    }


  public function update(ProveedoresUpdate $request, $id)

    {
          $Proveedores= Proveedores::FindOrFail($id);
        $input = $request->all();

        
        $Proveedores->fill($input)->save();
        Session::flash('update','Se ha actualizado  correctamente');
        
           return redirect('ProveedoresC');

    }









}
