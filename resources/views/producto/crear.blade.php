





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
                  <h1>Crear Producto</h1>
           </div>
          <div class="panel-body">



                       {!!Form::open(['route'=>'ProductoInventario.store','method'=>'POST'])!!}
            
       
             <div class="form-group">
                  {!!form::label('codigo producto')!!}
                  {!!form::text('codigo',null,['id'=>'codigo','class'=>'form-control','placeholder'=>'Digite codigo producto'])!!}
             </div>

           <div class="form-group">
                  {!!form::label('nombre')!!}
                  {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Digite nombre producto'])!!}
             </div>

               
             <div class="form-group">
               {!!form::label('Familia     :')!!}
         <select class="form-control" name="familia">
             <option value="0">seleccione una opción</option>
             <option value="repuestos de aceite">Repuestos de aceite</option>
             <option value="repuestos de motor">repuesto de motor</option>
              </select>




             </div>

                 <div class="form-group">
                {!!form::label('categoria')!!}

                {!! Form::select('id_categoria',$categoria,null,['id'=>'id_categoria','class'=>'form-control']) !!}

             </div>

  

  

  

                 <div class="form-group">
                {!!form::label('medida')!!}

                {!! Form::select('id_unidadmedida',$medida,null,['id'=>'id_unidadmedida','class'=>'form-control']) !!}

             </div>

  

             
                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}
                <a href="{{ route('ProveedoresC.index')}}"><button type="button" id='cancelar'  name='cancelar' class="btn btn-info btn-sm m-t-10" >Cancelar</button></a>
              
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