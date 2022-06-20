<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sascim</title>
    <link rel="icon" href="{{ asset('img/logoo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <!-- ********************************************barrras --> 


<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/material.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <style>
    body{
     
        font-family: 'verdana';
        background: linear-gradient(to left, #008CF3, #FFFFFF);
		
    }
    .color-container{
        width: 12px;
        height: 16px;
        display: inline-block;
        border-radius: 4px;
    }
    a{
        text-decoratio: none; 
        
    }
    #ColorUSer {
        color: white;
        font-size:14px ;
    }
    nav{
        background: linear-gradient(to left, #008CF3, #FFFFFF);
    }
  </style>
 
</head>
<body >
<nav class="navbar fixed-top">
  <div class="container-fluid" style="height:35">
  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <img src="https://img.icons8.com/color/20/undefined/top-menu.png"/>
    </button>
    <a class="navbar-brand " href="#" id="ColorUSer">Zuly<img src="https://img.icons8.com/color/20/undefined/circled-user-male-skin-type-4--v1.png"/></a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header" style="align:center">
        <center>
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="{{asset('img/logoo.png')}}" alt="" width="35" height="35" >Sascim</h5>
            </center>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <hr>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
          <li class="nav-item">
            <a class="nav-link active"  href="{{route('UsuariosI')}}">
              <img src="https://img.icons8.com/color/48/undefined/user.png"/>Usuarios 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/color/48/000000/screen-wiper.png"/>Monitor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/color/48/undefined/business-report.png"/>Reporte Lote/Sector</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://img.icons8.com/color/48/undefined/new-document.png"/>Operaciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">Conceptos </a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://img.icons8.com/color/48/undefined/documents.png"/>Reportes
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item" href="#">► Consulta Estados Del Cliente</a></li>
              <li><a class="dropdown-item" href="#">► Reporte de Cortes</a></li>
              <li><a class="dropdown-item" href="#">► Reporte Resumen de Reconexiones</a></li>
              <li><a class="dropdown-item" href="#">► Reporte de Morosos</a></li>
              <li><a class="dropdown-item" href="#">► Reporte de Cartera</a></li>
              <li><a class="dropdown-item" href="#">► Lecturas Por Mes de Plomeros</a></li>
              <li><a class="dropdown-item" href="#">► ingresos po Dia</a></li>
              <li><a class="dropdown-item" href="#">► Reporte estado Dataciones</a></li>
              <li><a class="dropdown-item" href="#">► Reporte de Cargas</a></li>
              <li><a class="dropdown-item" href="#">► Correos Electronicos</a></li>
              <li><a class="dropdown-item" href="#">► Cortes por mes</a></li>
              <li><a class="dropdown-item" href="#">► Resume Lotes, Area y Sector</a></li>
              <li><a class="dropdown-item" href="#">► Reporte Convenios</a></li>
              <li><a class="dropdown-item" href="#">► Reporte Notas De Credito</a></li>
              <li><a class="dropdown-item" href="#">► Reporte Correos No Enviados</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/color/48/undefined/print.png"/>Reimpresion De Facturas Fel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/color/48/undefined/print.png"/>Imprimir Factura De Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent/48/000000/run-command.png">Imprimir Avisos De Cortes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent/48/000000/run-command.png">Reenvio de Comprobante</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent/48/000000/run-command.png">Consulta Pagos En Bancos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent/48/000000/run-command.png">Cargas de Pagos no identificados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent/48/000000/run-command.png">Certificados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="https://img.icons8.com/fluent/48/000000/run-command.png">Notas De Credito Fel</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>



@yield('content')      
          
</body>
</html>