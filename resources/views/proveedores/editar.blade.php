










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
    

   
   font-size: 12px;  
   text-align: left;
   background: #E1EEF4;
}
 table, td {
  
 font-size: 12px;  
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
                  <h1>Editar Proveedor </h1>
           </div>
          <div class="panel-body">

   

                        {!!Form::model($Proveedores,['route'=>['ProveedoresC.update',$Proveedores->id_proveedor],'method'=>'PUT'])!!}
            
       
             <div class="form-group">
                  {!!form::label('rut')!!}
                  {!!form::text('rut',null,['id'=>'rut','class'=>'form-control','placeholder'=>'Digite rut proveedor'])!!}
             </div>

           <div class="form-group">
                  {!!form::label('nombre')!!}
                  {!!form::text('nombre',null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Digite nombre Proveedor'])!!}
             </div>

              <div class="form-group">
                  {!!form::label('direccion')!!}
                  {!!form::text('direccion',null,['id'=>'direccion','class'=>'form-control','placeholder'=>'Digite direccion'])!!}
             </div>




              <div class="form-group">
                  {!!form::label('telefono')!!}
                  {!!form::text('fono',null,['id'=>'fono','class'=>'form-control','placeholder'=>'Digite telefono'])!!}
             </div>

                
          <div class="form-group">
                  {!!form::label('Correo')!!}
                  {!!form::text('correo',null,['id'=>'correo','class'=>'form-control','placeholder'=>'Digite correo'])!!}
             </div>

          <div class="form-group">
                  {!!form::label('giro')!!}
                  {!!form::text('giro',null,['id'=>'giro','class'=>'form-control','placeholder'=>'Digite correo'])!!}
             </div>

                     

                       
                 <div class="form-group">
                {!!form::label('ciudad')!!}

                {!! Form::select('id_ciudad',$ciudad,null,['id'=>'id_ciudad','class'=>'form-control']) !!}

             </div>

  

                 <div class="form-group">
                {!!form::label('centros')!!}

                {!! Form::select('id_cc',$centros,null,['id'=>'id_cc','class'=>'form-control']) !!}

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