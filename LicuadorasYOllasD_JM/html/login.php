<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion L-O-D</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
	<link rel="shortcut icon" href="html/images/favicon.bmp">

    <link rel="stylesheet" href="html/main.css">
	
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
	
</head>
<body>
    <form action="index.php" name="form1" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
        <h2>Iniciar sesión</h2>
        <p>Nombre de usuario: <br>
<div class="form-floating mb-3">
  <input type="text" class="form-control" size="15%" id="floatingInput" placeholder="Valor Con El Que Ingresa" name="username" maxlength="30" required="required" value="usuarioadmin">
  <label for="floatingInput">Nombre De Usuario</label>
</div>

        <p>Contraseña: <br>
<div class="form-floating mb-3">
  <input type="password" class="form-control" size="15%" id="floatingInput" placeholder="Valor Con El Que Ingresa" name="password" maxlength="30" required="required" value="1234">
  <label for="floatingInput">Contraseña</label>
</div>

        <p class="center"><input class="btn btn-info btn-outline btn-lg" type="submit" value="Iniciar Sesión"></p>
    </form>
</body>
</html>