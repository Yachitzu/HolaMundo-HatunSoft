<?php
class CrudS{

	public static function obtenerProyecto(){
	include_once("conexion.php");
	$objeto = new Conexion();
	$conectar = $objeto ->Conectar();
	$consulta = "SELECT * FROM proyectos";
	$resultado = $conectar ->prepare($consulta);
	$resultado->execute();
	$data = $resultado ->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($data);
	}
}
	
?>