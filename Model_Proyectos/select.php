<?php
    class CrudS{
        public function obtenerPersonas(){
            include_once("./Model/conexion.php");
            $objeto = new conexion();
            $conexion = $objeto->Conectar();
            $sql = "SELECT * FROM usuarios WHERE estado = 'T'";
            $resultado = $conexion -> prepare($sql);
            $resultado -> execute();
            $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($data);
        }
    }
?>