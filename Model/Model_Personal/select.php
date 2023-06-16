<?php
    class CrudS{
        public function obtenerPersonas(){
            include_once("../conexion.php");
            $objeto = new conexion();
            $conexion = $objeto->Conectar();
            $sql = "SELECT * FROM personal";
            $resultado = $conexion -> prepare($sql);
            $resultado -> execute();
            $data = $resultado -> fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($data);
        }
    }
?>