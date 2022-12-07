<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estadisticas L-O-D</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
	<link rel="shortcut icon" href="html/images/favicon.bmp">
    

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
    <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:6;
}

-->

    </style>
<body>

<?php
include 'html/db.php';
	
session_start();
$Usuario = $_SESSION['username'];
$IdUser = $_SESSION['IdUser'];	
$Nombre = $_SESSION['nombre'];	

	
if(!isset($Usuario))
{
	header("location: Index.php");
}

              $Ban = $mysqli->query("SELECT banner.Codigo FROM banner WHERE banner.IdBanner='1';");
				$Ben = mysqli_fetch_array($Ban);

$Tpuser = $_SESSION['tpuser'];	
if($Tpuser<2)
{
echo"
	<div class='container py-3' >
	<nav class='navbar navbar-expand-lg' style='background-color: #e3f2fd;'>
  <div class='container-fluid'>
      <a href='/' class='d-flex align-items-center text-dark text-decoration-none'>
$Ben[Codigo]
        <span class='fs-4'>Licuadoras Y Ollas D </span>
      </a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
      <ul class='navbar-nav me-auto mb-2 mb-lg-0'></ul>
        <div class='nav-item'>
          <a class='btn btn-info me-2' href='Estidisticas.php'>Estadisticas</a>
        </div>
        <div class='nav-item'>
          <a class='btn btn-outline-info me-2' href='Ventas.php'>Ventas</a>
        </div>
        <div class='dropdown'>
  <button class='btn btn-outline-info dropdown-toggle me-2' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
    Gestion Productos
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item' href='Productos.php'>Productos</a></li>
    <li><a class='dropdown-item' href='Agregar Producto.php'>Agregar Productos</a></li>
    <li><a class='dropdown-item' href='Editar Productos.php'>Editar Productos</a></li>
    <li><a class='dropdown-item' href='Eliminar Producto.php'>Eliminar Productos</a></li>
  </ul>
</div>		  
        <div class='nav-item'>
          <a class='btn btn-outline-info me-2' href='Cotizacion.php'>Cotizar</a>
        </div>
        <div class='nav-item me-2'>
          <a class='nav-link disabled'>|</a>
        </div>
	  <form class='d-flex' role='search' action='html/Salir.php'>
        <input class='form-control me-2' type='search' disabled='disabled' value='$Nombre' aria-label='Search'>
        <button class='btn btn-outline-danger btn-sm' type='submit'>Cerrar_Sesion</button>
      </form>
    </div>
  </div>
</nav>
	";
}	
else 
{
echo"Sin Acceso"; }
?>
	
	
    <body>
<p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <h1 align="center" class="Estilo6"><strong><em>Sistema De Informacion Manejo De Inventario</em></strong></h1>
            <h3 align="center" class="Estilo6"><strong><em>L-O-D: Estadisticas Y Graficos </em></strong></h3>
            <h3 align="center" class="Estilo6"><em>Medellin - Antioquia</em></h3>
            <p align="center" class="Estilo6"><br />
              * * * * BIENVENIDO * * * *</p>

			  
            <table width="30%" border="4" align="center" bordercolor="#99FFFF">
              <tr>
					<?php
				  
				  
include 'Grafico.php';

         
			//cerrar la conexión
            @mysqli_close ($mysqli);
				?>
	</div>				
  <footer class="navbar navbar-expand-lg pt-3 border-top" style="background-color: #e3f2fd;">
    <div class="row">
      <div class="col-3 col-md">
        <h5>&nbsp;</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none"></a></li>
        </ul>
      </div>
      <div class="col-3 col-md">
        <h5>&nbsp;</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none"></a></li>
        </ul>
      </div>
      <div class="col col-md">
        <img class="mb" src="html/images/Licuadoras_Y_Ollas_D.png" alt="" width="50" height="50">
        <small class="d-block mb text-muted">&copy; 2022</small>
      </div>
      <div class="col-3 col-md">
        <h5>Licuadoras Y Ollas D S.A.S</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none"></a></li>
        </ul>
      </div>
      <div class="col-3 col-md">
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none">Mantenimiento Y Reparacion De Electrodomesticos</a></li>

        </ul>
      </div>
      <div class="col-3 col-md">
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none">Venta De Repuestos E Instalacion</a></li>
        </ul>
      </div>
    </div>
  </footer>
</html>




