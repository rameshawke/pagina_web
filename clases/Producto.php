<?php 

class Producto
{

	function __construct()
	{
		require_once("Conexion.php");
		$this->conexion=new Conexion();
	}

	function insertar($nom_prod,$foto,$descripcion, $precio){
			$consulta="INSERT INTO producto (idproducto, nom_prod, foto, descripcion, precio, estatus) VALUES (null, '{$nom_prod}', '{$foto}', '{$descripcion}', '{$precio}', 1)";
			$resultado=$this->conexion->query($consulta);
			return $resultado;
	}
	function mostrar(){
		$consulta="SELECT * FROM producto WHERE estatus=1";
		$resultado=$this->conexion->query($consulta);
		return $resultado;
	}
	
}
 ?>