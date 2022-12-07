<?php

include 'html/db.php';


session_start();
			 
if( isset($_POST['password'])==0){
    include_once 'html/login.php';}
else 
{
$Usuario = $_POST['username'];
$Contra = $_POST['password'];

$datos = $mysqli->query("SELECT usuarios.IdUser, usuarios.nombre, usuarios.username, usuarios.tpuser FROM usuarios WHERE usuarios.username = '$Usuario' AND password = '$Contra';");
$lot =mysqli_fetch_array($datos);

$logi = $mysqli->query("SELECT COUNT(*) AS contar FROM usuarios WHERE username = '$Usuario' AND password = '$Contra';");
$log =mysqli_fetch_array($logi);


if($Contra=0)
{}
else
{
if($log['contar']>0)
{
	$_SESSION['username'] = $Usuario;
	$_SESSION['IdUser'] = $lot['IdUser'];
	$_SESSION['nombre'] = $lot['nombre'];
	$_SESSION['tpuser'] = $lot['tpuser'];
 header("location: Cotizacion.php");
}
else
{
    echo "No existe el usuario $Usuario ";
    $errorLogin = "Nombre de usuario y/o contraseña incorrecta";
    include_once 'html/login.php';
}
}
}
?>