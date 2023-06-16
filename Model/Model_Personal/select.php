<?php
 function Conectar(){
    define("servidor" , "localhost");
    define("nombreBD" , "hatunsoft");
    define("usuario" , "root");
    define("password" , "");
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
    try {
        $conexion = new PDO("mysql:host=".servidor."; dbname=".nombreBD,usuario,password, $opciones);
        return $conexion;
    } catch (Exception $e){
        die("Error en la conexion: " . $e->getMessage());
    }
} 

function listarUsuarios(){
   
    $con =  Conectar();
  
    $query = $con->prepare("SELECT CED_PER, NOM_PER, APE_PER, ROL_PER FROM personal");
    $query->execute();
    $r = $query->fetchAll();
    $filas = "";

    foreach ($r as $resu) {
      $filas .= '<tr>
                         <td>' . $resu['CED_PER'] . '</td>
                         <td>' . $resu['NOM_PER'] . '</td>
                         <td>' . $resu['APE_PER'] . '</td>
                         <td>' . $resu['ROL_PER'] . '</td>
                         <td> 
                             <Button class="editar">Editar</Button>
                             <Button class="eliminar">Eliminar</Button>
                         </td>
                         </tr>';
    
    
  }
}
 
?>