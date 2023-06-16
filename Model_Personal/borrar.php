<?php
    include_once("../Model/conexion.php");
    class CrudE{
        public function eliminarPersonas(){
            $objeto = new conexion();
            $conexion = $objeto->Conectar();
            $cedula = $_GET["cedula"];
            $consulta="DELETE from personal where CED_PER ='$cedula'";
            $resultado = $conexion -> prepare($consulta);
            $resultado -> execute();
            $data = "Se elimino";
            echo json_encode($data);
        }
    }
?>