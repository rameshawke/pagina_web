<?php
include("../clases/Usuario.php");
$usuario=new Usuario();

$nombres=$_POST["nombres"];
$apaterno=$_POST["apaterno"];
$amaterno=$_POST["amaterno"];
$username=$_POST["username"];
$pass=$_POST["pass"];


$respuesta=$usuario->insertar($nombres, $apaterno, $amaterno, $username, $pass);

if ($respuesta==true){
    echo"Guardado";
}else{
    echo"Error";
}
?>