<?php 


if(!isset($_SESSION)){
    session_start();
}


$auth = $_SESSION['login'] ?? false;

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' :'' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/../index.php">
                    <img src="/../build/img/logo.svg" alt="logo de bienes raices">
                </a>

                <div class="mobile-menu">
                    <img src="/../build/img/barras.svg" alt="icono menu">
                </div>

                <div class="derecha">

                    <img  class="dark-mode-boton" src="/../build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncio.php">Anuncio</a>
                        <a href="blog.php">BLOG</a>
                        <a href="contacto.php">Contacto</a>'
                        <?php if ($auth): ?>
                        <a href="cerrar-session.php">Cerrar Sesion</a>
                         <?php endif ?>     
                            
                        

                        
                    </nav>

                   
                </div>
            
              
                

            </div>

            <?php  if($inicio)  {    ?>
                         <h1>Venta de casas y departamentos exclusivos de lujos</h1>
                <?php  } ?>

        </div> <!--cierre de la barra-->



    </header>

    