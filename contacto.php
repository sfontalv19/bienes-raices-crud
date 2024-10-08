<?php

require 'includes/templates/app.php';
incluirTemplate('header');
?>




    <main class="contenedor seccion">
        <h1>contacto</h1>

        <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp"></source>
         <source srcset="build/img/destacada3.jpg" type="image/jpeg"></source>
        <img loading="lazy" src="build/img/destacada3.jpg" alt="imagen contacto">
       
    </picture>

    <h2> llene el formulario de contacto</h2>


    <form class="formulario">
        <fieldset >
            <legend> informacion personal</legend>

            <label for="nombre" >nombre</label>
            <input type="text" placeholder="tu nombre" id="nombre">


            <label for="email" >E-mail</label>
            <input type="email" placeholder="tu email" id="email">


            <label for="telefono" >telefono</label>
            <input type="tel" placeholder="tu telefono" id="telefono">


            <label for="mensaje" >mensaje</label>
           <textarea id="mensaje"></textarea>



        </fieldset>

        <fieldset>
            <legend>informacio sobre la propiedad</legend>



            <label for="opciones">vende o compra</label>
            <select name="casa" id="opciones">
                <option value="" disabled selected>--selecione--</option>
                <option value="compra">compra</option>
                <option value="vende">vende</option>




               


            </select>


            <label for="presupuesto" >presupuesto o precio</label>
            <input type="number" placeholder="tu precio" id="telefono">

            

            <fieldset>
                <legend>informacion sobre la propiedad</legend>

                <p>como desea ser contactado</p>
                <div class="forma-contacto">
                <label for="contactar-telefono">telefono</label>
                <input  name="contacto" type="radio" value="telefono" id="contactar-telefono">

                
                <label for="contactar-email">E-mail</label>
                <input  name="contacto" type="radio" value="email" id="contactar-email">
            </div>
            <p>si eleigio telefono, elija la fecha y la hora para ser contactado</p>

            <label for="fecha" >fecha</label>
            <input type="date"  id="fecha">


            <label for="hora" >hora</label>
            <input type="time"  id="hora" min="09:00" max="18:00" >

    
            </fieldset>

        </fieldset>



        <input type="submit" name="boton" value="enviar" class="boton-verde">

    </form>
      

    </main>

    <?php
$inicio = true;
incluirTemplate('footer');

?>
