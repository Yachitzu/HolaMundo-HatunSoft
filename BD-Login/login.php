<?php
include_once '../Model/conexion.php';
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$consulta = "SELECT * FROM personal WHERE NOM_PER='$usuario' AND CED_PER='$password' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$cargo = "SELECT ROL_PER FROM personal WHERE NOM_PER='$usuario' AND CED_PER='$password' ";
$resultadoC = $conexion->prepare($cargo);
$resultadoC->execute();
$r=$resultadoCfetchAll();
$_SESSION["s_rol"] = $resultadoC;
$rol = "";
foreach($r as $resu){
    $rol .= $resu['ROL_USU'];
}

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
    
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;
