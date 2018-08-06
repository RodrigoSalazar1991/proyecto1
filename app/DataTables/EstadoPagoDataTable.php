<?php

namespace App\DataTables;

use App\User;
use App\Estado_Pago;
use Yajra\Datatables\Services\DataTable;

class EstadoPagoDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
         return $this->datatables
        ->eloquent($this->query())->addColumn('action', function ($estado) {

               
            
                    
                   return '
                   <button  value="'.$estado->id_pago.','.$estado->nombre.'" OnClick="MostrarNombre(this);" class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#modificar">Editar</button>
                            <button value="'.$estado->id_pago.','.$estado->nombre.'" OnClick="Mostrarse(this);" class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal">Eliminar</button>'

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
        $query = Estado_Pago::query();

        return $this->applyScopes($query);
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
                        'id_pago' => ['title' => 'Id pago'],
                         'nombre' => ['title' => 'Nombre '],
                         
                      
                    ])->addAction(['title' => 'acción'])->parameters([
                           'processing'=>' true',
                         'serverSide'=>'true',

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
            'id_pago',
            // add your columns
            'nombre',
           
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'estadopagos_' . time();
    }
}
