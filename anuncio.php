<?php


require 'includes/templates/app.php';
incluirTemplate('header');
?>





    <main class="contenedor seccion">
      
            <h2> casas y depas en ventas</h2>
    
            <?php 
        $limite = 10;
       include 'includes/templates/anuncios.php';
       
       ?>
           
    

    </main>

    <?php

$inicio = true;
incluirTemplate('footer');


?>
