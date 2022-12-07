<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facturacion L-O-D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="html/css/main.css">
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
$NombreV = $_SESSION['nombre'];	
$Tipo_User = $_SESSION['tpuser'];
	
	
if(!isset($Usuario))
{
	header("location: Index.php");
}
	?>

	
	<div class="container py-3" >
	<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="body_1" width="40" height="40">

<g transform="matrix(1.3333334 0 0 1.3333334 0 0)">
    <image  x="0" y="0" xlink:href="data:image/png;base64,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" width="30" height="30"/>
</g>
</svg>
        <span class="fs-4">&nbsp;&nbsp;Licuadoras Y Ollas D</span>
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      <div class="col-4 text-right">
        <a href="javascript:window.print()">Imprimir</a>
      </div>
    </div>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
      <div class="col-4 text-right">
        <a href="Cotizacion.php">Salir</a>
      </div>
    </div>
  </div>
</nav>
		

	
	
    <body>
<p>&nbsp;</p>


<?php
				
              //consulta sql
			
              $Codigo = $_POST['Codigo'];
              $Nombre = $_POST['Nombre'];
              $Cantidad = $_POST['Cantidad'];
              $Valor = $_POST['Valor'];		
              $Descuento = $_POST['Descuento'];
              $Valordes = $_POST['Valordes'];		
              $ValorTotal = $_POST['ValorTotal'];
              $NombreC = $_POST['NombreC'];		
              $CC = $_POST['CC'];
              $Direccion = $_POST['Direccion'];		
              $Correo = $_POST['Correo'];
		
		      $TotalSD = ($Cantidad*$Valor);

              $Registro = $mysqli->query("INSERT INTO `ventas` (`IdVenta`, `IdUserV`, `IdProductoV`, `NombreCliente`, `Cedula`, `Correo`, `Direccion`, `Cantidad`, `ValorUnicoV`, `Descuento`, `ValorTotal`, `Ganancia`, `Fecha`, `Hora`) VALUES (NULL, '$IdUser', '$Codigo', '$NombreC', '$CC', '$Correo', '$Direccion', '$Cantidad', (SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo), (SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo), (((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*$Cantidad)-(((((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*$Cantidad)*(SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo))/100))), (((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)-((((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*(SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo)/100)))-((SELECT productos.ValorIngreso FROM `productos` WHERE productos.IdProducto = $Codigo))))*$Cantidad, current_timestamp(), current_timestamp());");

              $Editar = $mysqli->query("UPDATE `productos` SET `Cantidad` = (SELECT productos.Cantidad FROM `productos` WHERE productos.IdProducto = $Codigo)-$Cantidad WHERE `productos`.`IdProducto` = $Codigo;");
		
              $Bus = $mysqli->query("SELECT ventas.IdVenta, ventas.Fecha, ventas.Hora FROM ventas WHERE ventas.IdVenta = (SELECT MAX(ventas.IdVenta) FROM ventas);");
			  $Buss = mysqli_fetch_array($Bus);
		
    ?>


<header class="row">
  <div class="logoholder text-center" >
    <img src="html/images/Licuadoras Y Ollas2.png" width="80" height="80">
  </div><!--.logoholder-->

  <div class="me">
    <p>
      <strong>Sistema Web Licuadoras Y Ollas D</strong><br>
      Medellin - Antioquia<br>
      Colombia<br>
      
    </p>
  </div><!--.me-->

  <div class="info">
    <p>
      Web: <a href="">N/A</a><br>
      E-mail: <a href="mailto:licuadorasyollasd@gmail.com">licuadoras@gmail.com</a><br>
      Tel: 3203339697<br>
    </p>
  </div><!-- .info -->

  <div class="bank">
    <p>
      Factura Electronica<br>
      Nit: 12345678 <br>
      Licuadoras Y Ollas<br>
      L-O-D
    </p>
  </div><!--.bank-->

</header>


<div class="row section">

	<div class="col-2">
    <h1>Factura</h1>
  </div><!--.col-->

  <div class="col-2 text-right details">
    <p>
      Fecha Y Hora: <?php echo"$Buss[Fecha] $Buss[Hora]"; ?><br>
      Numero De Factura: <input type="text" value="<?php echo"$Buss[IdVenta]"; ?>" readonly="readonly"/><br>
    </p>
  </div><!--.col-->
  
  
  
  <div class="col-2">
    

    <p class="client">
      <strong>Facturar a</strong><br>
      <?php echo"$NombreC"; ?><br>
      <?php echo"C.C: $CC"; ?><br>
	  <?php echo"E-Mail: $Correo"; ?><br>
	  <?php echo"Direccion: $Direccion"; ?>
    </p>
  </div><!--.col-->
  
  
  <div class="col-2">
   

    <p class="client">
      <strong>Tipo De Venta</strong><br>
      Prescencial<br>
    </p>
  </div><!--.col-->

  

</div><!--.row-->

<div class="row section" style="margin-top:-1rem">
<div class="col-1">
	<table style='width:100%'>
    <thead>
	<tr class="invoice_detail">
      <th width="25%" style="text-align">Vendedor</th>
       <th width="25%">Orden de compra </th>
      <th width="20%">Enviar por</th>
      <th width="30%">Términos y condiciones</th>
	 </tr> 
    </thead>
    <tbody>
	<tr class="invoice_detail">
      <td width="25%" style="text-align"><?php echo"$NombreV"; ?></td>
       <td width="25%"><?php echo"$Buss[IdVenta]"; ?></td>
      <td width="20%">*</td>
      <td width="30%">Pago al contado</td>
	 </tr>
	</tbody>
	</table>
</div>

</div><!--.row-->

<div class="invoicelist-body">
  <table>
    <thead>
      <th width="5%">Código</th>
      <th width="60%">Descripción</th>
      <th width="10%">Cantidad</th>
      <th width="15%">Precio</th>
      <th class="taxrelated">Iva</th>
      <th width="10%">Total</th>
    </thead>
    <tbody>
      <tr>
        <td width='5%'><a class="control removeRow" href="#">x</a> <span><?php echo"$Codigo"; ?></span></td>
        <td width='60%'><span><?php echo"$Nombre"; ?></span></td>
        <td class="amount"><input type="text" value="<?php echo"$Cantidad"; ?>" readonly="readonly"/></td>
        <td class="rate"><input type="text" value="<?php echo"$Valor"; ?>" readonly="readonly"/></td>
        <td class="tax taxrelated">0</td>
        <td class="sum"><?php echo"$TotalSD"; ?></td>
      </tr>
    </tbody>
  </table>
</div><!--.invoice-body-->

<div class="invoicelist-footer">
  <table>
    <tr class="taxrelated">
      <td>Descuento: </td>
      <td id="total_tax"><?php echo"$Descuento"; ?></td>
    </tr>
    <tr>
      <td><strong>Total:</strong></td>
      <td id="total_price"><?php echo"$ValorTotal"; ?></td>
    </tr>
  </table>
</div>

<div class="note" contenteditable>
  <h2>Nota:</h2>
</div><!--.note-->

<footer class="row">
  <div class="col-1 text-center">
    <p class="notaxrelated">El monto de la factura no incluye el impuesto sobre las ventas.</p>
    
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="assets/js/main.js"></script>	  
			  
			  
			  
			  
	  
			  
			  
			  
				
	<?php

            
                //cerrar la conexión
            @mysqli_close ($mysqli);
				?>
                 

</html>




