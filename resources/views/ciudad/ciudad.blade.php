


<style >
table, th {
	  

   
   font-size: 15px;  
   text-align: left;
   background: #E1EEF4;
}
 table, td {
	
   font-size: 15px; 
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
  <div class="col-sm-8"><h1>Ciudad</h1></div>
</div>
 

<button class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#create">Agregar</button>
<br>
<br>
<br>
<div style="overflow-x:auto; width: 80%;"  align="center" margin="0 auto" >
{!! $dataTable->table() !!}


</div>

{!! $dataTable->scripts() !!}





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form class="w3-container" action="/ciudad/delete" method="POST" onKeypress="if(event.keyCode == 13) event.returnValue = false;">
              {{ csrf_field() }}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-erase"></i>Estas seguro de eliminar 
          

          <input  border="0" id="enombre" name="enombre" type="text" value=""  readonly=""> </h4>

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
















{{-- Modal Form Create --}}

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><h1>Crear Ciudad</h1></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" onKeypress="if(event.keyCode == 13) event.returnValue = false;">
           <p class="error text-center alert alert-danger hidden"></p>
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="cnombrex">Nombre :</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="cciudad" name="cciudad"
           onKeyUp="javascript:this.value = this.value.replace(/,/,'');document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"  placeholder="Ingresa Nombre" required>
             
            </div>
          </div>
        </form>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit" id="add">
              <span class="glyphicon glyphicon-plus"></span>Guardar
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Cancelar
            </button>
          </div>
    </div>
  </div>
</div></div>






{{-- Modal Form Editar --}}

<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><h1>Modificar</h1></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" onKeypress="if(event.keyCode == 13) event.returnValue = false;">
           <p class="error text-center alert alert-danger hidden"></p>
          <div class="form-group row add">
            <label class="control-label col-sm-2" for="">Nombre :</label>
            <div class="col-sm-10">



                        <input type="hide" id="eid" name="eid" hidden>
              <input type="text" class="form-control" id="tnombre" name="tnombre" placeholder="Ingresa Nombre" onKeyUp="javascript:this.value = this.value.replace(/,/,'');document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" required>
             



            </div>
          </div>
        </form>
          <div class="modal-footer">
            <button class="btn btn-warning" type="submit" id="Editar">
              <span class="glyphicon glyphicon-plus"></span>Guardar
            </button>
            <button class="btn btn-warning" type="button" data-dismiss="modal">
              <span class="glyphicon glyphicon-remobe"></span>Cancelar
            </button>
          </div>
    </div>
  </div>
</div></div>













<script type="text/javascript">




 $("#create").on('hide.bs.modal', function () {
          $('.error').addClass('hidden');
       $(this).find('form')[0].reset();


    });
  $("#modificar").on('hide.bs.modal', function () {
          $('.error').addClass('hidden');


    });



$("#cciudad").on('keyup', function(){
         $('.error').addClass('hidden');
    }).keyup();



$("#tnombre").on('keyup', function(){
         $('.error').addClass('hidden');
    }).keyup();



 $(document).on('click','.create-modal', function() {
    $('#create').modal('show');
   
    $('.form-horizontal').show();
    $('.modal-title').text('Crear Ciudad');
  });
  $("#add").click(function() {
    $.ajax({
      type: 'POST',
      url:'{{ url('addciudad')}}',
      data: {
        '_token': $('input[name=_token]').val(),
        'cciudad': $('input[name=cciudad]').val()
      },
      success: function(data) {
                if ((data.errors)){
             $('.error').removeClass('hidden');
                    $('.error').text(data.errors.cciudad);
                   
                }
                else {

            
           location.reload();
             
                     // var url = location.href;
                     // $('#create').modal('hide');
                     // $("#refrescar").empty();
                     // $("#refrescar").load(url); 

         
                       
                }
            },

        });

     });
    




 $(document).on('click','.create-modal', function() {
    $('#modificar').modal('show');
   
    $('.form-horizontal').show();
    $('.modal-title').text('Crear Ciudad');
  });
  $("#Editar").click(function() {
    $.ajax({
      type: 'POST',
      url:'{{ url('editarciudad')}}',
      data: {
        '_token': $('input[name=_token]').val(),
         'eid': $('input[name=eid]').val(),
        'tnombre': $('input[name=tnombre]').val()
      },
      success: function(data) {
                if ((data.errors)){
                   $('.error').removeClass('hidden');
                    $('.error').text(data.errors.tnombre);
                   
                }
                else {

            
           location.reload();
             
                     // var url = location.href;
                     // $('#create').modal('hide');
                     // $("#refrescar").empty();
                     // $("#refrescar").load(url); 

         
                       
                }
            },

        });

     });
    


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









</script>
@endsection