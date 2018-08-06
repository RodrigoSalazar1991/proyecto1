<?php

namespace App\DataTables;

use App\User;
use Yajra\Datatables\Services\DataTable;
use App\Marca;


class MarcaDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
           return $this->datatables
        ->eloquent($this->query())->addColumn('action', function ($marca) {

               
            
                    
                   return '
                   <button  value="'.$marca->id_marca.','.$marca->nombre.'" OnClick="MostrarNombre(this);" class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#modificar">Editar</button>
                            <button value="'.$marca->id_marca.','.$marca->nombre.'" OnClick="Mostrarse(this);" class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal">Eliminar</button>'

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
      
        $query = Marca::query();

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
                        'id_marca' => ['title' => 'Id marca'],
                         'nombre' => ['title' => 'Nombre Ciudad'],
                         
                      
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
            'id_marca',
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
        return 'marcas_' . time();
    }
}
