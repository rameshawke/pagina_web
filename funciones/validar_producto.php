<?php 
session_start();
include("./clases/Producto.php");

$producto= new Producto();

$nom_prod=$_POST['nom_prod'];
$foto=$_POST['foto'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];


$resultado=$producto->mostrar($nom_prod, $foto, $descripcion, $precio);
$resultado2=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);
	
 ?>