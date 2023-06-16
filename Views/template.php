<html>
    <head>
        <title> CrudMVC </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>

    <body>
        <header> 
            <img src = "images/banner.jpg" width = "100%" heith = "30%">
        </header>

        <nav>
            <ul>
                <!-- CAMBIO index.php -->            
                <li> <a href = "index.php?action=inicio"> Inicio </a> </li>
                <li> <a href = "index.php?action=proyectos"> Proyectos </a> </li>
                <li> <a href = "index.php?action=tareas"> Tareas </a> </li>
                
            </ul>
        </nav>

        <section>
            <?php
                $mvc = new MvcController();
                $mvc -> enlacesPagController();
            ?>
        </section>
            
        <footer>
        Derechos reservados<br>
        
        </footer>
    </body>
</html>
