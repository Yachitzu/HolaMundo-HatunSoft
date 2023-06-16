<?php
    class CrudA{
        public function actualizarPersonas(){
            include_once("conexion.php");
            $objeto = new conexion();
            $conexion = $objeto->Conectar();

            $Cedula = $_POST["cedula"];
            $Nombre = $_POST["nombre"];
            $Apellido = $_POST["apellido"];
            $Rol = $_POST["rol"];
            $Disponibilidad = $_POST["disponibilidad"];
            
            $consulta = "UPDATE personal SET NOM_PER = '$Cedula', APE_PER='$Nombre', ROL_PER='$Rol', DIS_PER='$Disponibilidad' WHERE CED_PER = '$Cedula'";
            $resultado = $conexion -> prepare($consulta);
            $resultado ->execute();


            $data = "Se actualizo";
            echo json_encode($data);
        }
    }
?>