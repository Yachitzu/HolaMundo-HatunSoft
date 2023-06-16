<?php
    class MvcController{
        #Llama a la plantilla
        public function plantilla(){
            include 'views/template.php';
        }

        public function enlacesPagController(){
            #isset reconoce acción
            #_GET llama a otra variable por URL
            if(isset($_GET['action'])){
                $enlacesController = $_GET['action'];
            }else{
                $enlacesController = "PaginaPrincipal.php";
            }
            $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
            include $respuesta;
        }
    }
?>