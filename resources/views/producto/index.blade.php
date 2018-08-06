

<style >
table, th {
    
  
    border-spacing: 2px;
   
   font-size: 12px;  
   text-align: left;
   background: #E1EEF4;
}
 table, td {
  
   font-size: 12px; 
   text-align: left;
   border:1px solid #24943A;

}
 

#enombre{
 
  color: red;
  background-color: #FFFFFF;
  border-width:0;
}

</style>
<?php
$variable=0;


?>





@extends('menu.menu_principal')
 
@section('content')

@include('partials.messages')

  <script src="https://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"></script>


 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    



  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

  <link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
 </head>

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>





<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-8"><h1>Inventario Productos</h1></div>
</div>
 


  <a href="{{ route('ProductoInventario.create')}}">
     <button   margin-right="116px" type="button" id='cancelar'  name='cancelar'  class="btn btn-primary" >Agregar Producto</button>  </a> 


<br>
<br>
<br>






<div style="overflow-x:auto; width: 100%;"  align="center" margin="0 auto" >
{!! $dataTable->table() !!}


</div>

{!! $dataTable->scripts() !!}





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form class="w3-container" action="/Proveedores/delete" method="POST" onKeypress="if(event.keyCode == 13) event.returnValue = false;">
              {{ csrf_field() }}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-erase"></i>Estas seguro de eliminar 
          

          <input  border="0" id="enombre" name="enombre" type="text" value="" readonly=""> </h4>

           <input type="hidden" id="idt" name="idt" value="">

      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Aceptar</button>
      </div>
      </div>
</form>
    </div>
  </div>
</div>






















<script type="text/javascript">



function MostrarNombre(btn){

 var pn=btn.value;
 var separador=",";
 var dx=pn.split(separador);
  document.getElementById("eid").value = dx[0];
 document.getElementById("tnombre").value = dx[1];

}





function Mostrarse(btn){
  var pnr=btn.value;
 var separador=",";
 var nm=pnr.split(separador);
  document.getElementById("idt").value = nm[0];
 document.getElementById("enombre").value = nm[1];

}


$(document).ready(function(){
   
   
      $('#bb').hide(3000);
      $('#bbb').hide(3000);
  
  });


</script>
@endsection