


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>




  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">

{!!Html::style('css/bootstrap.min.css')!!}


@extends('menu.menu_principal')
 
@section('content')
@include('partials.messages')
<style >

body {
    

   
   font-size: 13px;  
   text-align: left;
   background: #E1EEF4;
}
 table, td {
  
 font-size: 13px;  
   text-align: left;
   border:1px solid #24943A;

}
 
</style>





   <div class="col-md-12"  >
   <div class="row">
    <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-6">
     

        <div class="panel panel-default">
          <div class="panel-heading">
                  <h1>Editar Stock</h1>
           </div>
          <div class="panel-body">



                          {!!Form::model($Stock,['route'=>['StockC.update',$Stock->id_stock],'method'=>'PUT'])!!}
            
       
             <div class="form-group">
                  {!!form::label('Nombre producto')!!}
                  {!!form::text('id_producto',$producto->nombre,['id'=>'id_producto','class'=>'form-control','readonly','placeholder'=>'Digite codigo producto'])!!}
             </div>

                    <div class="form-group">
                  {!!form::label('estante')!!}
                  {!!form::text('estante',$Stock->estante,['id'=>'estante','class'=>'form-control','placeholder'=>'Digite nombre producto'])!!}
             </div>

            
         <div class="form-group">
                  {!!form::label('stock minimo')!!}
                  {!!form::number('stock_minimo',$Stock->stock_minimo,['id'=>'stock_minimo','class'=>'form-control','placeholder'=>'Digite stock minimo'])!!}
             </div>
                 
              <div class="form-group">
                  {!!form::label('stock actual')!!}
                  {!!form::number('stock_actual',$Stock->stock_actual,['id'=>'stock_actual','class'=>'form-control','placeholder'=>'Digite stock actual'])!!}
             </div>

              <div class="form-group">
                  {!!form::label('Precio unitario')!!}
                  {!!form::number('precio_unitario',$Stock->precio_unitario,['id'=>'precio_unitario','class'=>'form-control','placeholder'=>'Digite precio unitario'])!!}
             </div>
                 
  

             
                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
                <a href="{{ route('ProductoC.index')}}"><button type="button" id='cancelar'  name='cancelar' class="btn btn-info btn-sm m-t-10" >Cancelar</button></a>
              
          {!!Form::close()!!}
           </div></div>
  <div class="col-sm-2">
        </div>
</div>
</div>


     </div>
   </div>
</div>

<script>




</script>
@endsection