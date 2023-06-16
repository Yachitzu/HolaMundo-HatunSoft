<?php
    class CrudI{
        public function insertarPersonas(){
            include_once("../conexion.php");
            $con = $objeto->Conectar();
            
            $Cedula = $_POST["cedula"];
            $Nombre = $_POST["nombre"];
            $Apellido = $_POST["apellido"];
            $Rol = $_POST["rol"];
            $Disponibilidad = $_POST["disponibilidad"];
            
            $consulta = "INSERT INTO personal (CED_PER, NOM_PER, APE_PER, ROL_PER, DIS_PER) VALUES('$Cedula', '$Nombre', '$Apellido', '$Rol','$Disponibilidad')";
            $resultado = $con -> prepare($consulta);
            $resultado -> execute();

            $data = "Se guardo";
            echo json_encode($data);
        }
    }
?>