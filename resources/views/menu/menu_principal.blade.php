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
   
</body>

<script type="text/javascript">
    


    $('.nav .dropdown-submenu > a:not(a[href="#"])').on('click', function() {
    self.location = $(this).attr('href');
});

</script>

</html>