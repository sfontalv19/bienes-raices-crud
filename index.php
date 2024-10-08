<?php

require 'includes/templates/app.php';
incluirTemplate('header', $inicio = true);

?>




    </header>

    <main class="contenedor seccion">
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

    </main>


    <section class="seccion contenedor">
        <h2> casas y depas en ventas</h2>


       <?php 
        $limite = 3;
       include 'includes/templates/anuncios.php';
       
       ?>



        <div class="alinear-derecha">
            <a href="anuncio.php" class="boton-verde"> ver todas</a>
            

        </div>
        


    </section>


    <section class="imagen-contacto">
        <h2>encuentra la casa de tus sueños</h2>
        <p>llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="contacto.html" class="boton-amarillo">contactanos</a>




    </section>



    <div class="contenedor seccion seccion-inferior">

        <section class="blog">
            <h3>Nuestro BLOG</h3>
            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpp">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>terraza en el techo de tu casa</h4> 
                    <p class="informacion-meta">escrito el : <span>26/3/2024</span> por: <span>admin</span></p>

                    <p>consejo para construir una terra en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
                </div>

            </article>


            <article class="entrada-blog">
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog12.jpg" type="image/jpp">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>guia para decorar tu hogar</h4> 
                    <p class="informacion-meta">escrito el : <span>26/3/2024</span> por: <span>admin</span></p>

                    <p>maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </a>
                </div>

            </article>

        </section>

        <section class="testimoniales">
            <h3>testimoniales</h3>
            <div class="testimonial">
                <blockquote> el personal se comporto de una excelente forma, muy buena atencion y la casa que me ofrecieron cumple con todas mis expectativas.

                </blockquote>
                <p>- sergio fontalvo</p>
            </div>
        </section>

    </div>

   <?php

$inicio = true;
incluirTemplate('footer');



?>
