<?php

namespace App\DataTables;

use App\User;

use App\Categoria;
use Yajra\Datatables\Services\DataTable;

class CategoriaDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
         return $this->datatables
        ->eloquent($this->query())->addColumn('action', function ($categoria) {

                 
                   return '
                         
                   <button  value="'.$categoria->id_categoria.','.$categoria->nombre.','.$categoria->descripcion.'" OnClick="MostrarNombre(this);" class="glyphicon glyphicon-edit" data-toggle="modal" data-target="#modificar">Editar</button>  <input type="hidden" id="descripcion" value="'.$categoria->id_categoria.'">
                            <button value="'.$categoria->id_categoria.','.$categoria->nombre.'" OnClick="Mostrarse(this);" class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#myModal">Eliminar</button>'

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
           $query = Categoria::query();

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
                        'id_categoria' => ['title' => 'Id Categoria'],
                         'nombre' => ['title' => 'Nombre Categoria'],
                           'descripcion' => ['title' => 'descripción'],
                      
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
            'id_categoria',
            // add your columns
            'nombre',
            'descripcion',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'categorias_' . time();
    }
}
