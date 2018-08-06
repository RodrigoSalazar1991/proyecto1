<?php

namespace App\DataTables;

use App\User;
use App\Producto;
use Yajra\Datatables\Services\DataTable;
use Illuminate\Support\Facades\Auth;

class ProductoDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
        
                  ->blacklist(['stock_actual', 'id_stock', 'stock_minimo','bb','bbb','cc','ccc'])
              ->addColumn('action', function ($producto) {

                    return '<a href="' . route('ProductoC.show', $producto->id_stock) .'"><button class="glyphicon glyphicon-edit" style="color:blue">editar stock</button></a>';

                   

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

 $users = Producto::query()->select([
                        'producto.id_producto',
                        'producto.nombre',
                        'producto.id_categoria',
                        'producto.codigo',
                        'producto.familia',
                        'producto.id_unidadmedida', 'stock.precio_unitario as cc', 'stock.estante as ccc','stock.id_stock','stock.stock_minimo','stock.stock_actual','unidad_medida.nombre as bb','categorias.nombre as bbb'])->leftjoin('stock', 'producto.id_producto', '=', 'stock.id_producto')->leftjoin('unidad_medida', 'producto.id_unidadmedida', '=', 'unidad_medida.id_unidadmedida')->leftjoin('categorias', 'producto.id_categoria', '=', 'categorias.id_categoria')->orderBy('categorias.nombre', 'asc')->where('stock.id_cc', '=', $idx);;
               ;
               
               

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
                        'id_producto' => ['title' => 'Id producto'],
                         'codigo' => ['title' => 'Codigo'],
                         'familia' => ['title' => 'familia'],
                           'nombre' => ['title' => 'Nombre'],
                             'bb' => ['title' => 'Unidad de Medida'],
                              'bbb' => ['title' => 'nombre categorias'],
                           'stock_minimo' => ['title' => 'stock minimo'],
                            'stock_actual' => ['title' => 'stock actual'],
                             'cc' => ['title' => 'Precio_unitario'],
                               'ccc' => ['title' => 'estante'],
                          
                          
                         
                      
                    ])->addAction(['title' => 'acción'])->parameters([
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
        return 'productodatatables_' . time();
    }
}
