<?php

namespace App\DataTables;

use App\Centro_Costo;
use Yajra\Datatables\Services\DataTable;

class CentroCostoDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
        {
         return $this->datatables
        ->eloquent($this->query())->addColumn('action', function ($centro) {

               
            
                    
                   return '
                   <button  value="'.$centro->id_cc.','.$centro->nombre_cc.'" OnClick="MostrarNombre(this);" class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#modificar">Editar</button>
                            <button value="'.$centro->id_cc.','.$centro->nombre_cc.'" OnClick="Mostrarse(this);" class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal">Eliminar</button>'

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
      $query = Centro_Costo::query();

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
                        'id_cc' => ['title' => 'Id Centro'],
                         'nombre_cc' => ['title' => 'Nombre Centro de Costo'],
                         
                      
                    ])->addAction(['title' => 'acción'])->parameters([
                           'processing'=>' true',
                         'serverSide'=>'true',

                        'language' => [
        'url' => url('//cdn.datatables.net/plug-ins/1.10.9/i18n/Spanish.json')
    ],
                          'dom'          => 'Bfrtip',
                       
                       
                        'buttons'      => ['csv', 'excel', 'reset', 'reload'],
                        
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
            'id_cc',
            // add your columns
            'nombre_cc',
            
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'centrocostodatatables_' . time();
    }
}
