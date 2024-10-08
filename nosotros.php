<?php

require 'includes/templates/app.php';
incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>conoce sobre nosotros</h1>


        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 años de experencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quibusdam nobis animi quas totam
                    ipsum obcaecati, quis deserunt quasi, harum autem facere ea recusandae illo rem officiis nostrum
                    unde a.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis nemo corrupti officiis neque
                    mollitia repellat quis unde sint numquam distinctio quas laboriosam, error necessitatibus sed
                    accusamus pariatur fuga rerum impedit.</p>
            </div>

        </div>

    </main>

    
    <section class="contenedor seccion">
        <h1>mas sobre nosotros</h1>
        <div class="icono-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3> SEGURIDAD</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corporis quidem error omnis nesciunt
                    vero explicabo tenetur et similique id, officiis, illum odio? Dignissimos adipisci magni saepe,
                    consectetur iure nihil.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3> PRECIO</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corporis quidem error omnis nesciunt
                    vero explicabo tenetur et similique id, officiis, illum odio? Dignissimos adipisci magni saepe,
                    consectetur iure nihil.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3> TIEMPO</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum corporis quidem error omnis nesciunt
                    vero explicabo tenetur et similique id, officiis, illum odio? Dignissimos adipisci magni saepe,
                    consectetur iure nihil.</p>
            </div>
        </div>

    </section>
    <?php

$inicio = true;
incluirTemplate('footer');
?>
