<?php

namespace App\DataTables;

use App\User;
use App\Proveedores;
use Yajra\Datatables\Services\DataTable;
use Illuminate\Support\Facades\Auth;

class ProveedorDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
        ->eloquent($this->query())->addColumn('action', function ($proveedores) {
            
                 
                   return '




                       <a href="' . route('ProveedoresC.edit', $proveedores->id_proveedor) .'"><button class="btn btn-primary">editar</button> </a>    
                            <button value="'.$proveedores->id_proveedor.','.$proveedores->nombre.'" OnClick="Mostrarse(this);" class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal">Eliminar</button>'

                   ;



            })
        ->make(true);

    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        
      $idx = Auth::user()->id_cc;

         $users = Proveedores::query()->select([
                        'proveedores.rut as rut',
                        'proveedores.nombre as nombre',
                        'proveedores.direccion as direccion',
                        'proveedores.giro as giro',
                        'proveedores.fono as fono',
                        'proveedores.correo as correo',
                           'proveedores.id_proveedor as id_proveedor',
                         'ciudad.id_ciudad as nombre_ciudad','centro_costo.nombre_cc as id_cc'])->Join('centro_costo', 'proveedores.id_cc', '=', 'centro_costo.id_cc')->Join('ciudad', 'proveedores.id_ciudad', '=', 'ciudad.id_ciudad')->orderBy('centro_costo.nombre_cc', 'asc')->where('proveedores.id_cc', '=', $idx);
               

        return $users;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
       

return $this->builder()
                    ->columns([
                        'rut' => ['title' => 'RUT'],
                         'nombre' => ['title' => 'NOMBRE PROVEEDOR'],
                         'direccion' => ['title' => 'DIRECCION '],
                         'giro' => ['title' => 'GIRO '],
                          'fono' => ['title' => 'FONO'],
                         'correo' => ['title' => 'CORREO'],
                      'id_cc' => ['title' => 'CENTRO DE COSTO'],
                               'id_proveedor' => ['title' => 'ID PROVEEDOR'],
                    ])->addAction(['title' => 'ACCIÓN'])->parameters([
                           'processing'=>' true',
                         'serverSide'=>'true',
                         
                      'pageLength'=> 500,

                        'language' => [
        'url' => url('//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json')
    ],
                          'dom'          => 'Bfltip',
                       
                       
                        'buttons'      => ['export', 'print', 'reset', 'reload'],
                        
                    ]);








    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            





        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'proveedordatatables_' . time();
    }
}



