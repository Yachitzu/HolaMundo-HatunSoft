<?php
class CrudUpdate{
    public static function actualizarProyectos(){
        include_once 'conexion.php';
        $objeto = new Conexion();
        $conexion = $objeto->Conectar();

        $idProyecto = $_POST['ID_PRO'];
        $nombre = $_POST['NOM_PRO'];
        $descripcion = $_POST['DES_PRO'];
        $fechaInicio = $_POST['FEC_INI_PRO'];
        $fechaFin = $_POST['FEC_FIN_PRO'];
        
        $consulta = "UPDATE proyectos set NOM_PRO = '$nombre', DES_PRO = '$descripcion', FEC_INI_PRO = '$fechaInicio', FEC_FIN_PRO = '$fechaFin' WHERE ID_PRO = '$idProyecto'";
        
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $dato = "Se actualizo correctamente";
        echo json_encode($dato);
    }
}
