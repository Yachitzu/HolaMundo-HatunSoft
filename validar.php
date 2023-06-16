<?php
if (isset($_SESSION)) {
    $_SESSION['u'] = "";
} else {
    session_start();
    $_SESSION['u'] = "";
}

include_once("Model/conexion.php");

$usuario = $_POST['usuario'];
$contraseña = $_POST['password'];
$_SESSION['usuario'] = $usuario;
$_SESSION['contraseña'] = $contraseña;
$con =  Conectar();
$query = "SELECT ROL_PER FROM personal WHERE NOM_PER=? and CED_PER=?";
$sentencia = $con->prepare($query);
$sentencia->execute(array($_SESSION['usuario'], $_SESSION['contraseña']));
$r = $sentencia->fetchAll();
$rol = "";
foreach($r as $resu){
    $rol .= $resu['ROL_PER'];
}
$_SESSION['rol'] = $rol;

if ($rol == "Miembro") {
    header("location:Views/Paginas/Miembro.php");
} else {
    if ($rol == "Gerente") {
        header("location:Views/Paginas/Gerente.php");
    } else {
        if ($rol == "Administrador") {
            header("location:Views/Paginas/Administrador.php");
        } else {
            header("location:index.php");
        }
    }
}

?>