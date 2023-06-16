<?php
class CrudE
{
    public static function eliminarProyecto()
    {
        include_once 'conexion.php';
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();
        $id = $_GET['ID_PRO'];
        $consulta = "DELETE FROM proyectos WHERE ID_PRO= '$id'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $dato = "Se elimino correctamente";
        echo json_encode($dato);
    }
}
