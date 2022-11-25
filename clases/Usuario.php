<?php 

class Usuario {

	function __construct(){
		require_once("Conexion.php");
		$this->conexion=new Conexion();
	}

	function insertar($nombres,$apaterno,$amaterno,$username,$pass){
			$consulta="INSERT INTO usuario (pk_usuario, nombres, apaterno, amaterno, username, pass, estatus) VALUES (null,'{$nombres}','{$apaterno}','{$amaterno}', '{$username}', '{$pass}', 1 )";
			$resultado=$this->conexion->query($consulta);
			return $resultado;
	}
	function buscar($username,$pass){
		$consulta="SELECT * FROM usuario WHERE username='{$username}' AND pass='{$pass}' AND estatus=1";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
}
?>
