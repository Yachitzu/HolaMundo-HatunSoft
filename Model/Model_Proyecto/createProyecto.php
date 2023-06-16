<?php
include_once("conexion.php");
class CrudG
{
    public static function createProyecto()
    {

        $objeto = new Conexion();
        $conexion = $objeto->Conectar();

        $nombre = $_POST['NOM_PRO'];
        $descripcion = $_POST['DES_PRO'];
        $fechaInicio = $_POST['FEC_INI_PRO'];
        $fechaFin = $_POST['FEC_FIN_PRO'];

        $consulta = "INSERT INTO proyectos (NOM_PRO, DES_PRO, FEC_INI_PRO, FEC_INI_PRO) VALUES (?,?,?,?, 1)";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(array($nombre, $descripcion, $fechaInicio, $fechaFin));
        $dato = "Se inserto correctamente";
        echo json_encode($dato);
    }
}
