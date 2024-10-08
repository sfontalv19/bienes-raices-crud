<?php

        // importar la base de datos

       
        $DB = conectarDB();

        // consulta

    $query = "SELECT * from propiedades limit $limite";
        // leer los resultados

        // obtener resultado

    $resultado = mysqli_query ($DB, $query);


?>





<div class="contenedor-anuncios">
    <?php while ($propiedades = mysqli_fetch_assoc($resultado)): ?>
            <div class="anuncio">
                <picture>
              
                <img loading="lazy" src="../../imagenes/<?php echo $propiedades['imagen']; ?>.jpg" alt="anuncio">
                
                <div class="contenido-anuncio">
                    <h3><?php  echo $propiedades['titulo']; ?></h3>
                    <p><?php  echo $propiedades['descripcion']; ?></p>
                    <p class="precio"><?php  echo $propiedades['precio']; ?></p>
            <ul class="icono-caracteristica">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php  echo $propiedades['wc']; ?></p> 

                </li>

                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono _estacionamiento">
                    <p><?php  echo $propiedades['estacionamiento']; ?></p>

                </li>


                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorios">
                       <p><?php  echo $propiedades['habitaciones']; ?></p>

                </li>


            </ul>  
            
            <a href="anuncios.php?id=<?php  echo $propiedades['id']; ?>" class="boton-amarillo-block">
                ver propiedad
            </a>



                </div>  <!--contenido anuncio-->
            </div>      <!--anuncio-->

        <?php  endwhile ?>
        </div>  <!--contenedor de anuncio-->




    <?php

        //cerrar la conexion
        mysqli_close($DB);


    ?>
