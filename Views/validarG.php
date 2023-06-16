<?php
include_once("../../Model/conexion.php");
function listadoUsuarios()
{
    $con = Conectar();
    $query = $con->prepare("SELECT * FROM detalle_tareas ");
    $query->execute();
    $r = $query->fetchAll();
    $filas = "";
    foreach ($r as $resu) {
        $filas .= '<tr>
                        <td>' . $resu['ID_TAR'] . '</td>
                        <td>' . $resu['NOM_TAR'] . '</td>
                        <td>' . $resu['DES_TAR'] . '</td>
                        <td>' . $resu['FEC_INI_TAR'] . '</td>
                        <td>' . $resu['FEC_FIN_TAR'] . '</td>
                        <td>' . $resu['EST_TAR'] . '</td>
                        <td>' . $resu['POR_TAR'] . '</td>
                        <td>' . $resu['ID_PRO_PER'] . '</td>
                        <td> 
                            <Button class="editar">Editar</Button>
                            <Button class="eliminar">Eliminar</Button>
                        </td>
                        </tr>';
    }
    return $filas;

}

if (isset($_POST['opcion']) && $_POST['opcion'] == 3) {
    $cedula = $_POST["cedDocentei"];
    $nom1 = $_POST['nombre1Docentei'];
    $nom2 = $_POST['nombre2Docentei'];
    $ape1 = $_POST['apellido1Docentei'];
    $ape2 = $_POST['apellido2Docentei'];
    $dir = $_POST['direccionDocentei'];
    $email = $_POST['emailDocentei'];
    $cla = $_POST['claveDocentei'];
    $con = conectar();
    $query = $con->prepare("INSERT INTO detalle_tareas (ID_TAR, NOM_TAR, DES_TAR, FEC_INI_TAR, FEC_FIN_TAR, EST_TAR, POR_TAR, ID_PRO_PER) 
            VALUES ($cedula,'$nom1','$nom2','$ape1','$ape2',
            '$dir','$email','$cla'");
    $query->execute();
    echo ("SE INSERTO TAREAS");
}
?>