<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
    
</head>

<style>



  .dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}  

</style>


<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
          
            
                    
               
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
              
             
                    <li> <img width="60%" src="/imagenes/llico.png"></li>


                    <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Producto <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">

                                <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Producto</a></li>
                                 <li><a href=""><i class="fa fa-btn fa-sign-out"></i>panel producto</a></li>
                                  <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Unidad Medida</a></li>
                                   <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Proveedores</a></li>
                                    <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Ciudad</a></li>
                                     <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Factura</a></li>

                            </ul>

                        </li>
                    </li>




                   

                    <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Incidentes <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </li>

              
                          

                    <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Mantención <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </li>


              



                    <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Administración <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </li>
 


                   
                    
                    <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Mantenedores <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">

             <li><a href="/ciudad/index"><i class="fa fa-btn fa-sign-out"></i>Ciudad</a></li>
              <li><a href="/CentroCosto/index"><i class="fa fa-btn fa-sign-out"></i>Centro de Costos</a></li>
           <li><a href="/UnidadMedida/index"><i class="fa fa-btn fa-sign-out"></i>Unidad de Medida</a></li>
           <li><a href="/Marca/index"><i class="fa fa-btn fa-sign-out"></i>Marcas de Productos</a></li>
            <li><a href="/Estado_Pago/index"><i class="fa fa-btn fa-sign-out"></i>Estado de Pago</a></li>
           <li><a href="/Categoria/index"><i class="fa fa-btn fa-sign-out"></i>Categorías</a></li>
          <li><a href="/ProveedoresC"><i class="fa fa-btn fa-sign-out"></i>Proveedores</a></li>
                 <li><a href="/Producto/index"><i class="fa fa-btn fa-sign-out"></i>Productos</a></li>

              
                                <li class = 'dropdown-submenu'>
                <a  tabindex = '-1' href='#'><span class = 'fa fa-btn fa-sign-out'> </span>Facturas </a>
                    <ul class='dropdown-menu'>
                        <li><a href='/Factura/index'> Crear Factura</a></li>
                        <li><a  href='#'> Reportes Facturas </a></li>
                    </ul>
                </li>
                                 <li><a href=""><i class="fa fa-btn fa-sign-out"></i>panel producto</a></li>
                                  <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Unidad Medida</a></li>
                                   <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Proveedores</a></li>
                                    <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Ciudad</a></li>
                                     <li><a href=""><i class="fa fa-btn fa-sign-out"></i>Factura</a></li>

                            </ul>

                        </li>
                    </li>








                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                  
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             USUARIO:{{ Auth::user()->name }}<br>   CORREO:{{ Auth::user()->email }}
                           <br>

<?php
         if (Auth::user()->id_cc == 11) {
           echo "CENTRO CHILLAN";}
           if (Auth::user()->id_cc == 12) {
           echo "CENTRO TLLICO";}
?>
                       
                           

                   
                           

                                 

                              <span class="caret"></span>

                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>
    <!-- JavaScripts -->
<script type="text/javascript">
    


    $('.nav .dropdown-submenu > a:not(a[href="#"])').on('click', function() {
    self.location = $(this).attr('href');
});

</script>



 <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>


  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>




<style type="text/css">

 
table {
  border-collapse: separate;
  border-spacing: 0;
  text-align: center;
  font-size: 12px;
}
th,
td {
  padding: 10px 15px;
}
thead {
  background: green;
  color:white;

}
th {
  font-weight: bold;
   background-color: #395870;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid blue;
}


</style>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<body>
  <body>
<html>
<head>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 

<?php if  (empty($detalle)) { ?>
    <button type="button" disabled="true" class="btn btn-primary " onclick="mi_funcion()"" readonly/>Guardar</button>
    <button  type="button" class="btn btn-warning" onclick="mi_funcion()"  />Cancelar</button>
<?php } else { ?>
     <button type="button" class="btn btn-primary " onclick="mi_funcion()""/>Guardar</button>
    <button  type="button" class="btn btn-warning" onclick="mi_funcion()"  />Cancelar</button>
<?php } ?>


  <p class="error text-center alert alert-danger hidden"></p>
    <div class="">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <section class="panel">
          
                <header class="panel panel-default">
                    <h3 align="center">Factura</h3>
                </header><!-- /header -->
            <div class="container-fluid">
  <div class="row">
       {!!Form::open(array('route'=>null,'id'=>'frmsave','method'=>'post'))!!}
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-5">

   {!!form::label('Proveedor')!!}
      {!! Form::select('id_proveedor',$proveedores,null,['id'=>'id_proveedor','class'=>'myselect  form-control']) !!}
        </div>
        <div class="col-md-3">


                {!!form::label('Estado pago')!!}

                {!! Form::select('id_pago',$estado_pago,null,['id'=>'id_pago','class'=>'form-control']) !!}

        
        </div>
        <div class="col-md-4">

                    {!!form::label('Numero de Factura')!!}  <br><input type="number"  class="required" id="numero_factura" name="numero_factura" placeholder="Numero de factura">
                 
                

        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

         <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6">
      {!!form::label('fecha factura')!!}
                
                  {!!form::date('fecha_factura',null,['id'=>'fecha_factura','class'=>'form-control','placeholder'=>'Digite direccion'])!!}

        </div>
        <div class="col-md-6">


          
                         {!!form::label('Responsable Comprador')!!}  <input type="text" id="responsable" class="form-control"  placeholder="Responsable de la factura">
        </div>
      </div>
    </div>
  </div>
</div>
        
          {{ Form::close() }}
               <br>
               <br>
       <?php  $suma=0;?>  
<div class="table-responsive">

                    <table class="table table-responsive" border="1">
                      
                        <thead class="table odd">
                                <th width="200px">Nombre Producto</th>
                                <th width="200px">Detalle</th>
                                 <th width="100px">marca</th>
                                <th>cantidad</th>
                                <th>Precio</th>
                                <th>Monto</th>
                           
                                <th style="text-align:center"><a href="#" data-toggle="modal" data-target="#create" class="addRow"><i class="btn btn-success">Agregar Producto</i></a></th>
                                </thead>
                                    <tbody>
                                       @foreach ($detalle as $item)
                                        <tr>
                                        <td width="30%">
                                         {{ $item->nombre }}
                                          

                                            </td>

                                            <td>
                                       {{ $item->detalle }}


                                            </td>


                                             <td>
                                     
                                             {{ $item->nombrem }}

                                            </td>


                                            <td width="13%">    {{ $item->cantidad }}             </td>
                                              <td width="13%">  $<?php     echo number_format($item->precio_unitario, 0, '', '.'); ?>   </td>
                                             <td > $<?php     echo number_format($item->subtotal, 0, '', '.'); ?>   </td> 
                                              <td> <button class="btn btn-danger"  value="{{$item->id_detalletemporal}}" OnClick="Mostrarse(this);">Eliminar</button></td>
                                              
                                        </tr>

                                         <?php  $suma=$suma+$item->subtotal;?>  
                                              @endforeach
                                    </tbody>
                                    <tfoot>
                                      <tr>
                                      </tr>
                                        <tr>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                           <td ><b>Neto  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</b></td>
                                             <td></b><input  id="neto" style="text-align:center" name="bruto" class="form-control qty"  min="0" readonly></td>
                                            <td style="border-none"></td>
 


                                        </tr>
                                          <tr>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                           <td ><b>Iva  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</b></td>
                                             <td><input  id="iva"  style="text-align:center" name="iva" class="form-control qty"  min="0" readonly></td>
                                            <td style="border-none"></td>
 


                                        </tr>

                                         <tr>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                            <td style="border:none"></td>
                                           <td ><b><b>total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</b></td>
                                             <td><input  id="total" style="text-align:center" name="neto" class="form-control qty"  min="0" readonly></td>
                                            <td></td>
 
                                           

                                        </tr>
                                    </tfoot>
                                    </tfoot>
                                   
                            </table></div>
                       
                          
{{-- Modal Form Create --}}

<div class="modal fade" id="create" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><h3>Agregar Producto a Factura</h3></h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" role="form" onKeypress="if(event.keyCode == 13) event.returnValue = false;">
          
          <div class="form-group row add">
           <div class="row">
   <h5 style="color: red;"  class="errorid_producto text-center hidden"></h5>
  <div class="col-sm-3"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Producto </div>
  <div class="col-sm-3">
    <br>
                <select  style="width: 430px;" name="id_producto" id="id_producto" class="myselect form-control">
                                           
                                              @foreach($producto as $key=> $p)
                                            <option value="{{!!$key!!}}">{!!$p!!}</option>
                                             @endforeach
                                            
                                            </select>   
                                            </div>
 
  <div class="col-sm-1"></div>
</div>
<br>


<div class="row">
  <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Detalle</div>
  <div class="col-sm-9">
                  <input style="width: 430px;" type="text" class="form-control" name="detalle" id="detalle" placeholder="ingrese detalle"></div>
  <div class="col-sm-1"></div>
</div>
<br>


  <div class="row">
  <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marca </div>
  <div class="col-sm-9">
              
 <select style="width: 430px;" name="id_marca" id="id_marca" class="myselect form-control">
                                           
                                              @foreach($marca as $key=> $p)
                                            <option value="{{!!$key!!}}">{!!$p!!}</option>
                                             @endforeach
                                            
                                            </select>   
</div>
  <div class="col-sm-1"></div>
</div>
<br>


<div class="row">
     <h5 style="color: red;" class="errorcantidad text-center hidden"></h5>
  <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cantidad</div>
  <div class="col-sm-9">
                 <input style="width: 430px;" type="number"  name="cantidad" id="cantidad" class="form-control qty"  min="0"></div>
  <div class="col-sm-1"></div>
</div>
<br>

<div class="row">
     <h5 style="color: red;"  class="errorprecio text-center hidden"></h5>
  <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Precio</div>
  <div class="col-sm-9">
                 <input style="width: 430px;" type="number" name="precio" id="precio" class="form-control price" min=”0”></div>
  <div class="col-sm-1"></div>
</div>
<br>



<div class="row">
  <div class="col-sm-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subtotal</div>
  <div class="col-sm-9">
               <input style="width: 430px;" value="0" type="text" name="subtotal" id="subtotal" class="form-control amount" readonly></div>
  <div class="col-sm-1"></div>
</div>
<br>


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




            
        </section>



</body>


<script type="text/javascript">
$(document).ready(function(){ // Se ejecuta una vez que el DOM de la pagina este listo

var t=<?php echo $suma ?>;
document.getElementById("neto").value=t;

var neto=<?php echo $suma?>;

var iva=Math.round(<?php echo $suma ?>*0.19);

document.getElementById("iva").value=iva;
 
document.getElementById("total").value=neto+iva;


        $( "#precio" ).change(function() { //Captura cada vez que vea un cambio en el input con id "codigo"
         var a=document.getElementById("cantidad").value;
         var b=document.getElementById("precio").value;
         var c=Math.round(a*b);
           document.getElementById("subtotal").value = c;

        });
         $( "#cantidad" ).change(function() { //Captura cada vez que vea un cambio en el input con id "codigo"
         var a=document.getElementById("cantidad").value;
         var b=document.getElementById("precio").value;
         var c=Math.round(a*b);
           document.getElementById("subtotal").value = c;
   });








});





 $(document).on('click','.create-modal', function() {
    $('#create').modal('show');
   
    $('.form-horizontal').show();
    $('.modal-title').text('Crear Ciudad');
  });
  $("#add").click(function() {



var va=document.getElementById("id_producto").value;
var be=va.replace(/[^\d]/, '');


var pe=va=document.getElementById("id_marca").value;
var bn=pe.replace(/[^\d]/, '');

 var separador=be.replace("}", "");
var separadorb=bn.replace("}", "");

var id_marca= separadorb;
var id_producto= separador;



var detalle=document.getElementById("detalle").value;
var cantidad=document.getElementById("cantidad").value;
var subtotal=document.getElementById("subtotal").value;
var precio=document.getElementById("precio").value;


 var token = $("#token").val();
    $.ajax({
       headers: {'X-CSRF-TOKEN': token},
      type: 'POST',
      url:'{{ url('adddetalletemporal')}}',
       dataType: 'json',
      data: {id_producto:id_producto,id_marca:id_marca,detalle:detalle,cantidad:cantidad,subtotal:subtotal,precio:precio      
      },
   success: function(data) {
                if ((data.errors)){
            if (data.errors.cantidad) {
                            $('.errorcantidad').removeClass('hidden');
                            $('.errorcantidad').text(data.errors.cantidad);
                        }
                         if (data.errors.precio) {
                            $('.errorprecio').removeClass('hidden');
                            $('.errorprecio').text(data.errors.precio);
                        }
                         if (data.errors.id_producto) {
                            $('.errorid_producto').removeClass('hidden');
                            $('.errorid_producto').text(data.errors.id_producto);
                        }
                   
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
    












     

 $(".myselect").select2();



function mi_funcion(){


var id_proveedor= document.getElementById("id_proveedor").value;
var numero_factura=document.getElementById("numero_factura").value;
var fecha_factura=document.getElementById("fecha_factura").value;
var id_pago=document.getElementById("id_pago").value;
var responsable=document.getElementById("responsable").value;
var viva=document.getElementById("iva").value;
var vbruto=document.getElementById("bruto").value;
var vneto=document.getElementById("totall").value;



  
$("#camposos").find(':input').each(function() {
          elemento= this;
            an=elemento.value;
         
          n=elemento.id;
         
          j=elemento.value;
          arreglo[numero]=j;
              alert(n);
          alert(numero);
          alert(j);
       
         arreglo2[numero]=j;
    
               numero++; 




        
             }
     
        );


 var token = $("#token").val();


$.ajax({
      headers: {'X-CSRF-TOKEN': token},
      type: 'POST',
       url:'{{ url('addPost')}}',
      dataType: 'json',
      data: {arreglo:arreglo,id_proveedor:id_proveedor,numero_factura:numero_factura,fecha_factura:fecha_factura,id_pago:id_pago,responsable:responsable,viva:viva,vbruto:vbruto,vneto:vneto
       
      },
      success: function(data) {
        if ((data.errors)){
                   $('.error').removeClass('hidden');
                    $('.error').text(data.errors.numero_factura);
                        $('.error').text(data.errors.responsable);
                   
                }
                else {

            
           location.reload();
             
                     // var url = location.href;
                     // $('#create').modal('hide');
                     // $("#refrescar").empty();
                     // $("#refrescar").load(url); 

         
                       
                }

                        

                       
                }
           

        });

}





function Mostrarse(btn){
  var id_detalletemporal=btn.value;


  
 var token = $("#token").val();
    $.ajax({
       headers: {'X-CSRF-TOKEN': token},
      type: 'POST',
      url:'{{ url('delatedetalletemporal')}}',
       dataType: 'json',
      data: {id_detalletemporal:id_detalletemporal   
      },
   success: function(data) {
                if ((data.errors)){
          
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

}



</script>




