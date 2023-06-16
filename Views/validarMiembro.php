<?php
include_once('../../Model/conexion.php');
    function listadoTareas()
    {
        $con = conectar();
        $query = $con->prepare("SELECT * FROM detalle_tareas");
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
                            </td>
                            </tr>';
        }
        return $filas;
    }
?>