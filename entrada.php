<?php

require 'includes/templates/app.php';
incluirTemplate('header');
?>




    <main class="contenedor seccion contenido-centrado ">
        <h1>guia para decorar tu casa</h1>

        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen destacada">
        </picture>
        <p class="informacion-meta">escrito el: <span>20/10/2021</span> por <span>sergio fontalvo</span> </p>

        <div class="resumen-propiedad">
            <p class="precio">3,000,000</p>
            <ul class="icono-caracteristica">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>

                </li>

                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono _estacionamiento">
                    <p>3</p>

                </li>


                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                    <p>4</p>

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
