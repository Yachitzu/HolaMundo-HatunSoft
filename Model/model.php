<?php
class EnlacesPaginas{
    public static function enlacesPaginasModel($enlacesModel)
    { 
        if($enlacesModel=="proyectos"||
           $enlacesModel=="tareas")
           {
           $module="views/interfaces/".$enlacesModel.".php";

           }
           else{
            $module="views/interfaces/inicio.php";
           }
           return $module;


    }
}

?>