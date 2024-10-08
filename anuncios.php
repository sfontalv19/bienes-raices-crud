<?php




$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id)
 {
    header('location: /');
 }



 require 'includes/templates/app.php';
 $DB = conectarDB();


 $query = "SELECT * FROM propiedades WHERE id = $id ";

 //obtener el resultado

 $resultado = mysqli_query($DB, $query);

 $propiedades = mysqli_fetch_assoc($resultado);




incluirTemplate('header');
?>



    <main class="contenedor seccion contenido-centrado ">
        <h1><?php  echo $propiedades['titulo'];?></h1>
                    <img loading="lazy" src="../../imagenes/<?php echo $propiedades['imagen']; ?>.jpg" alt="imagen destacada">
        

        <div class="resumen-propiedad">
            <p class="precio">$<?php  echo $propiedades['precio']; ?></p>
            <ul class="icono-caracteristica">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php  echo $propiedades['wc']; ?></p>

                </li>

                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono _estacionamiento">
                    <p><?php  echo $propiedades['estacionamiento']; ?></p>

                </li>


                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                    <p><?php  echo $propiedades['habitaciones']; ?></p>

                </li>


            </ul>

            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti expedita eos ea, dolores sequi
                voluptate iure laborum molestiae placeat aperiam numquam quidem quasi ratione quod doloribus ut esse ab!
                Delectus.
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus asperiores, minus magnam quidem a
                incidunt temporibus dignissimos non, praesentium nam minima, eum eius mollitia eveniet distinctio
                consequatur ratione voluptatem perspiciatis.</p>
        </div>

    </main>

    <?php

$inicio = true;
incluirTemplate('footer');



?>
