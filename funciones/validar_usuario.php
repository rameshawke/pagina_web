<?php 
session_start();
include("../clases/Usuario.php");

$usuario= new Usuario();

$username=$_POST['username'];
$pass=$_POST['pass'];


$resultado=$usuario->buscar($username, $pass);
$resultado2=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);

if ($resultado2==0) {
	echo "<meta http-equiv='REFRESH' content='0;
	url=..funciones/login/index.php'> <script> alert('Usuario o contraseña incorrectos') </script>";
	echo "<meta http-equiv='REFRESH' content='0;
	url=../login/index.php> <script> alert('Ingrese sus datos de nuevo correctamente') </script>";
}else{
	$_SESSION["pk_usuario"]=$datos["pk_usuario"];
	$_SESSION["username"]=$username;
	echo "<meta http-equiv='REFRESH' content='0;
	url=../index.php'> <script> alert('Bienvenido(a)') </script>";


	
}
 ?>