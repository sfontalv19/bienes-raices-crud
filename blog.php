<?php

require 'includes/templates/app.php';
incluirTemplate('header');
?>


    <main class="contenedor seccion contenido-centrado ">
        <h1>casa en venta frente al parque</h1>
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
                <p>escrito el : <span>26/3/2024</span> por: <span>admin</span></p>

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
                <p>escrito el : <span>26/3/2024</span> por: <span>admin</span></p>

                <p>maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
            </a>
            </div>

        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog3.webp" type="image/webp">
                    <source srcset="build/img/blog3.jpg" type="image/jpp">
                    <img loading="lazy" src="build/img/blog3.jpg" alt="texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>terraza en el techo de tu casa</h4> 
                <p>escrito el : <span>26/3/2024</span> por: <span>admin</span></p>

                <p>consejo para construir una terra en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
            </a>
            </div>

        </article>


        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/blog4.webp" type="image/webp">
                    <source srcset="build/img/blog4.jpg" type="image/jpp">
                    <img loading="lazy" src="build/img/blog4.jpg" alt="texto entrada blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.html">
                    <h4>guia para decorar tu hogar</h4> 
                <p>escrito el : <span>26/3/2024</span> por: <span>admin</span></p>

                <p>maximiza el espacio en tu hogar con esta guia, aprende a combinar muebles y colores para darle vida a tu espacio</p>
            </a>
            </div>

        </article>

    </main>

    <?php

$inicio = true;
incluirTemplate('footer');

?>
