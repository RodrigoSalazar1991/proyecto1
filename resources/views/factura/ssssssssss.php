


{!!Html::style('assets/invoice/css/bootstrap-theme.css')!!}
{!!Html::style('assets/invoice/css/bootstrap-theme.min.css')!!}

{!!Html::script('assets/invoice/js/bootstrap.min.js')!!}
{!!Html::script('assets/invoice/js/jquery.m

 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
    



  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>


  <link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>





@extends('menu.menu_principal')
 
@section('content')


<style type="text/css">
button {
   position: right;
align-content: center;
} 

#container{
    margin: 30px 50px 30px 50px;
    border: 2px solid #00A;
    background-color:#FFF !important;
}
body{
    background-color: #DBB;
}


</style>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<body>
  <body>
<html>
<head>
   
                 
  <button type="button" class="btn btn-primary " onclick="mi_funcion()"  />Aceptar</button>
    <button  type="button" class="btn btn-warning" onclick="mi_funcion()"  />Cancelar</button>


    <div class="w3-container w3-blue">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <section class="panel">
            <div class="panel panel-footer">
                <header class="panel panel-default">
                    <h3 align="center">Factura</h3>
                </header><!-- /header -->
            </div>

            <div class="panel panel-footer">
                {!!Form::open(array('route'=>null,'id'=>'frmsave','method'=>'post'))!!}
           <div class="row">
            <div class="col-lg-6">
               
                    
                 <div class="form-group" width="400px">
                {!!form::label('Proveedor')!!}

                {!! Form::select('id_proveedor',$proveedores,null,['id'=>'id_proveedor','class'=>'myselect  form-control']) !!}

             </div>

       
      

             </div>

             <div class="col-lg-6">
               
                 <div class="form-group" width="200x">
                {!!form::label('Estado pago')!!}

                {!! Form::select('id_pago',$estado_pago,null,['id'=>'id_pago','class'=>'form-control']) !!}

             </div>

      

             </div>







              <div class="col-lg-6">
               
                     <div class="col-lg-4">
                        <div class="form-group">
                    {!!form::label('Numero de Factura')!!}  <input type="text"  class="required" id="numero_factura" name="numero_factura" placeholder="Numero de factura">
                     </div>
                 </div>
              

                     <div class="col-lg-6">
                     <div class="form-group" width="400px">
                  {!!form::label('fecha factura')!!}
                  <br>
                  {!!form::date('fecha_factura',null,['id'=>'fecha_factura','class'=>'form-control','placeholder'=>'Digite direccion'])!!}
             </div>

                 </div>
              
      
 
                          </div>




                    
                 <div class="col-lg-6">
                    <div class="form-group">
                         {!!form::label('responable')!!}  <input type="text" class="form-control" id="responsable" name="responsable" placeholder="Responsable de la factura">
                    </div>
                 </div>
                
                
                   <div class="col-lg-12 col-sm-12">

         <div id="camposos">
             
        
                    <table class="table table-bordered">
                        <thead>
                                <th width="200px">Product name</th>
                                <th width="200px">Detalle</th>
                                 <th>marca</th>
                                <th>cantidad</th>
                                <th>Precio</th>
                                <th>Monto</th></div>
                                <th style="text-align:center"><a href="#" class="addRow"><i  class="glyphicon glyphicon-plus"></i>
                                </thead>
                                    <tbody>
                                        <tr>
                                        <td width="30%">
                                        <select name="productname[]" class="myselect form-control">
                                           
                                              @foreach($producto as $key=> $p)
                                            <option value="{{!!$key!!}}">{!!$p!!}</option>
                                             @endforeach
                                            
                                            </select>   
                                                
                                            </td>

                                            <td>    
                                              
                        <input type="text" class="form-control" name="detalle" placeholder="ingrese detalle">
                          

                                            </td>
                                             <td>
                                        <select name="marca[]" class="myselect form-control">
                                           
                                              @foreach($marca as $key=> $p)
                                            <option value="{{!!$key!!}}">{!!$p!!}</option>
                                             @endforeach
                                            
                                            </select>   
                                            </td>


                                            <td width="13%"><input type="number"  name="qty[]" class="form-control qty"  min="0"></td>
                                             <td width="13%"><input type="number" name="price[]" class="form-control price" min=”0”></td>
                                             <td ><input type="text" name="amount[]" class="form-control amount" readonly></td>
                                              <td><a href="#" class="btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
                                        </tr>
                                    </tbody>



                                    <tfoot>
    
                                      <tr>
                                      </tr>
                                        <tr>
                                            <td style="border:none"></td>
                                            <td style="border-none"></td>
                                            <td style="border-none"></td>
                                            <td style="border-none"></td>
                                           <td ><b>Neto  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</b></td>
                                             <td></b><input type="number" id="totall"  name="totall" class="form-control qty"  min="0" readonly></td>
                                            <td style="border-none"></td>
 


                                        </tr>
                                          <tr>
                                            <td style="border:none"></td>
                                            <td style="border-none"></td>
                                            <td style="border-none"></td>
                                            <td style="border-none"></td>
                                           <td ><b>Iva  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</b></td>
                                             <td><input type="number" id="iva"  name="iva" class="form-control qty"  min="0" readonly></td>
                                            <td style="border-none"></td>
 


                                        </tr>

                                         <tr>
                                            <td style="border:none"></td>
                                            <td style="border-none"></td>
                                            <td style="border-none"></td>
                                            <td style="border-none"></td>
                                           <td ><b><b>Bruto &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</b></td>
                                             <td><input type="number" id="bruto"  name="bruto" class="form-control qty"  min="0" readonly></td>
                                            <td></td>
 


                                        </tr>
                                    </tfoot>
                                   
                            </table>
                       

        </section>




            
</body>


<script type="text/javascript">




     

 $(".myselect").select2();


  var arreglo1 = [];
var numero=0;
  var n=7;
var objetivo;
var requerido;
var nextinput = 0;



    $('tbody').delegate('.qty,.price','keyup',function(){
     


        var tr =$(this).parent().parent();
        var qty = tr.find('.qty').val();
        var price = tr.find('.price').val();
        var amount= (qty *price);
        var redondear=Math.round(amount);
        tr.find('.amount').val(redondear);
        total();

       });
    $('.addRow').on('click',function(){


    addRow();
     $(".myselect1").select2();
});


function total(){
    var total=0;
    $('.amount').each(function(i,e){
    var amount=$(this).val()-0;
    total +=amount;
    var iva=Math.round(total*0.19);
    var t=Math.round(total);
        document.getElementById("totall").value = t;
    document.getElementById("iva").value = iva;
        document.getElementById("bruto").value = iva+t;

    })
    $('.total').html(total);
}

var an;
var j;
var n;
var np;
var arreglo2=[];
var arreglo3=[];
var arreglo=[];
var numero;
var j;

function mi_funcion(){
  
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


var id_proveedor= document.getElementById("id_proveedor").value;
var numero_factura=document.getElementById("numero_factura").value;
var fecha_factura=document.getElementById("fecha_factura").value;
var estado_pago=document.getElementById("estado_pago").value;
var responsable=document.getElementById("responsable").value;
var vneto=document.getElementById("neto").value;
var vbruto=document.getElementById("bruto").value;
var vtotal=document.getElementById("neto").value;


$.ajax({
      headers: {'X-CSRF-TOKEN': token},
      type: 'POST',
       url:'{{ url('addPost')}}',
      dataType: 'json',
      data: {arreglo:arreglo,id_proveedor:id_proveedor
       
      },
      success: function(data) {
              
alert(data);
     
                     // var url = location.href;
                     // $('#create').modal('hide');
                     // $("#refrescar").empty();
                     // $("#refrescar").load(url); 

         
  

                        

                       
                }
           

        });

}





    function addRow()
    {
     var tr=                            '<tr>'+
                                        '<td>'+
                                        '<select name="productname[]" class="myselect1 form-control">'+
                                       
                                         ' @foreach($producto as $key=> $p)'+
                                           ' <option value="{{!!$key!!}}">{!!$p!!}</option>'+
                                       ' @endforeach'+
                                        '</select>'+
                                        '</td>'+
                                         

                                         '<td>'+
                                              
                        '<input type="text" class="form-control" name="detalle" placeholder="ingrese detalle">'+
                                   '</td>'+
                                          '<td>'+
                                        '<select name="marca[]" class="myselect1 form-control">'+
                                           
                                             '@foreach($marca as $key=> $p)'+
                                            '<option value="{{!!$key!!}}">{!!$p!!}</option>'+
                                             '@endforeach'+
                                            
                                            '</select>'+   
                                            '</td>'+





                                        '<td><input type="number" name="qty[]" class="form-control qty"></td>'+
                                        '<td><input type="number"  name="price[]" class="form-control price"></td>'+
                                        '<td><input  type="number"  name="amount[]" class="form-control amount" readonly></td>'+
                                        '<td><a href="#" class="btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
                                        '</tr>';

                                              $('tbody').append(tr);
                                                      };


                                             $('.remove').live('click',function(){

                                                var l=$('tbody tr').length;

                                                if(l==1){alert("No se puede eliminar último reglon");}else{
                                                $(this).parent().parent().remove();}
                                                 total();
                                             });


</script>



@endsection



