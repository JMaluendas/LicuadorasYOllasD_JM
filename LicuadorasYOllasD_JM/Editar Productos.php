<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto L-O-D</title>
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
          <a class='btn btn-outline-info me-2' href='Estidisticas.php'>Estadisticas</a>
        </div>
        <div class='nav-item'>
          <a class='btn btn-outline-info me-2' href='Ventas.php'>Ventas</a>
        </div>
        <div class='dropdown'>
  <button class='btn btn-info dropdown-toggle me-2' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
    Gestion Productos
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item' href='Productos.php'>Productos</a></li>
    <li><a class='dropdown-item' href='Agregar Producto.php'>Agregar Productos</a></li>
    <li><a class='btn btn-info' href='Editar Productos.php'>Editar Productos</a></li>
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
        <div class='dropdown'>
  <button class='btn btn-info dropdown-toggle me-2' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
    Gestion Productos
  </button>
  <ul class='dropdown-menu'>
    <li><a class='dropdown-item' href='Productos.php'>Productos</a></li>
    <li><a class='dropdown-item' href='Agregar Producto.php'>Agregar Productos</a></li>
    <li><a class='btn btn-info' href='Editar Productos.php'>Editar Productos</a></li>
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

	"; }
?>
	
	
    <body>
<p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <h1 align="center" class="Estilo6"><strong><em>Sistema De Informacion Manejo De Inventario</em></strong></h1>
<div>
  <img src="html/images/11 imagen.png" width="200" height="200" style="float: left">
</div>
<div>
  <img src="html/images/8 imagen.png" width="200" height="200" style="float: right">
</div>
            <h3 align="center" class="Estilo6"><strong><em>L-O-D: Modificacion De Datos De Productos</em></strong></h3>
            <h3 align="center" class="Estilo6"><em>Medellin - Antioquia</em></h3>
            <p align="center" class="Estilo6"><br />
              * * * * BIENVENIDO * * * *</p>
			  
            <p align="center" class="Estilo6">&nbsp;</p>
            <p align="center" class="Estilo6">Digita Id Del Producto A Editar O Escriba El Nombre Del Producto Para Buscarlo</p>
			  
            <table width="35%" border="4" align="center" bordercolor="#99FFFF">
              <tr>
					<?php

              $Productos = $mysqli->query("SELECT productos.IdProducto, productos.NombreProducto, productos.ValorVenta FROM `productos` WHERE 1");
              echo "
                <th>
<input type=text list=items size=65% class=form-control name=Codigo onfocus=this.select() min=100 required=required placeholder=Escriba&nbsp;Codigo&nbsp;O&nbsp;Nombre&nbsp;Del&nbsp;Producto />
<datalist id=items>";
				  
              while($P = mysqli_fetch_array ($Productos))
              
              {echo"
  <option value=$P[IdProducto]>$P[NombreProducto] - Valor Unitario $P[ValorVenta]</option>";}
echo"
</datalist></th></tr></table><p>"; ?>

            <p align="center" class="Estilo8"></p>
            <p align="center" class="Estilo5">
              <label>
              <input type="submit" name="Submit" class="btn btn-info btn-outline btn-lg" value="Buscar Producto" />
              </label>
</p>
            <p class="Estilo5">&nbsp;</p>
				  <span class="Estilo5"></form>
				
	<?php

              //consulta sql
				  
			  if( isset($_POST['Codigo'])==0)
				 echo"<br>";
			  else 
			  {	    
              $Codigo = $_POST['Codigo'];			  
				  
              $Registro = $mysqli->query("SELECT productos.IdProducto, productos.NombreProducto, productos.Cantidad, productos.ValorIngreso, productos.Descuento, productos.ValorVenta FROM productos WHERE productos.IdProducto = $Codigo;");
				$Reg = mysqli_fetch_array($Registro);
				    
              if($Registro==FALSE)
              echo "<br /> * * * * Hay Errores En La Consulta Sql* * * * </p> <p align=center class=Estilo6>";
              else
              echo "<center> * * * * Se Muestran Los Datos Actuales Del Producto $Reg[NombreProducto] * * * * </center><p>
			  <strong><center> * * * * Sobrrescribe Los Datos A Modificar Y Luego Oprime El Boton Editar * * * * </center></strong><p></span>";         
 ?>
								
          <form align="center" id="form2" name="form2" method="post" action="">		  

			  
<table width="70%" align="center" border="0" bordercolor="#99FFFF">
  <tbody>
    <tr>
	  <td width="10%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="CodigoN" value="<?php echo"$Reg[IdProducto]"; ?>" readonly="readonly">
  <label for="floatingInput">Id Producto</label>
</div></td>
      <td width="20%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="NombreProductoN" value="<?php echo"$Reg[NombreProducto]"; ?>">
  <label for="floatingInput">Nombre Producto</label>
</div></td>
      <td width="10%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="CantidadN" value="<?php echo"$Reg[Cantidad]"; ?>">
  <label for="floatingInput">Cantidad</label>
</div></td>
      <td width="11%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="ValorIngresoN" value="<?php echo"$Reg[ValorIngreso]"; ?>">
  <label for="floatingInput">Valor Ingreso</label>
</div></td>
      <td width="12%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="ValorVentaN" value="<?php echo"$Reg[ValorVenta]"; ?>">
  <label for="floatingInput">Valor De Venta</label>
</div></td>
      <td width="9%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="DescuentoN" value="<?php echo"$Reg[Descuento]"; ?>">
  <label for="floatingInput">Descuento</label>
</div></td>
    </tr>
  </tbody>
</table>
			  
			  <p></p>
              <label>
              <input type="submit" name="Submit2" class="btn btn-info btn-outline btn-lg" value="Editar" />
              </label>				  
			  
			  	</form> <?php } ?>
				  
			<?php

              if( isset($_POST['CodigoN'])==0)
				 echo"<br>";
			  else 
			  {	    
              $CodigoN = $_POST['CodigoN'];
				  
              $NombreProductoN = $_POST['NombreProductoN'];
              $CantidadN = $_POST['CantidadN'];				  
              $ValorIngresoN = $_POST['ValorIngresoN'];				  
              $ValorVentaN = $_POST['ValorVentaN'];				  
              $DescuentoN = $_POST['DescuentoN'];				  
				  
				  
              $RegistroN = $mysqli->query("UPDATE `productos` SET `NombreProducto` = '$NombreProductoN', `Cantidad` = '$CantidadN', `ValorIngreso` = '$ValorIngresoN', `Descuento` = '$DescuentoN', `ValorVenta` = '$ValorVentaN' WHERE `productos`.`IdProducto` = $CodigoN;");
				    
              if($RegistroN==FALSE)
              echo "<br /> * * * * Hay Errores En La Consulta Sql* * * * </p> <p align=center class=Estilo6>";
              else
              echo "<center> * * * * Se Muestran Los Nuevos Datos Del Producto $NombreProductoN * * * * </center><p><p></span>";         
 ?>
								
          <form align="center" id="form3" name="form3" method="post" action="">		  

			  
<table width="70%" align="center" border="0" bordercolor="#99FFFF">
  <tbody>
    <tr>
	  <td width="10%"><div class="form-floating mb-3">
  <input type="text" class="form-control" value="<?php echo"$CodigoN"; ?>" readonly="readonly">
  <label for="floatingInput">Id Producto</label>
</div></td>
      <td width="20%"><div class="form-floating mb-3">
  <input type="text" class="form-control" value="<?php echo"$NombreProductoN"; ?>" readonly="readonly">
  <label for="floatingInput">Nombre Producto</label>
</div></td>
      <td width="10%"><div class="form-floating mb-3">
  <input type="text" class="form-control"  value="<?php echo"$CantidadN"; ?>" readonly="readonly">
  <label for="floatingInput">Cantidad</label>
</div></td>
      <td width="11%"><div class="form-floating mb-3">
  <input type="text" class="form-control" value="<?php echo"$ $ValorIngresoN"; ?>" readonly="readonly">
  <label for="floatingInput">Valor Ingreso</label>
</div></td>
      <td width="12%"><div class="form-floating mb-3">
  <input type="text" class="form-control" value="<?php echo"$ $ValorVentaN"; ?>" readonly="readonly">
  <label for="floatingInput">Valor De Venta</label>
</div></td>
      <td width="9%"><div class="form-floating mb-3">
  <input type="text" class="form-control"value="<?php echo"$DescuentoN %"; ?>" readonly="readonly">
  <label for="floatingInput">Descuento</label>
</div></td>
    </tr>
  </tbody>
</table>			  
			  	</form> 				  
			  
				  <?php  } 
           
         
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




