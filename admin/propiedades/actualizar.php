<?php



require '../../includes/templates/app.php';

estaAutenticado();


$id = $_GET['id'];
$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT); // Limpiar la cadena para obtener solo números enteros
$id = filter_var($id, FILTER_VALIDATE_INT); // Validar que sea un número entero válido

// Validar que sea un id válido
if (!$id || $id <= 0) {
    // Manejar el error de ID inválido, redirigir o mostrar un mensaje de error
    echo "ID inválido";
    exit; // Detener la ejecución del script
}




// Consultar id
$actualizar = "SELECT * FROM propiedades WHERE id = $id";
$resultado = mysqli_query($DB, $actualizar);
$propiedad = mysqli_fetch_assoc($resultado);

// consultar para obtener vendedores

$consultaVendedores = "SELECT * FROM vendedores";
$resultadoVendedores = mysqli_query($DB, $consultaVendedores);

// arreglo con mensaje de errores

$errores = [];

$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$wc = $propiedad['wc'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedores_id = $propiedad['vendedores_id'];
$imagen = $propiedad['imagen'];
// ejecualtar el codigo despues que el usuario envia



if($_SERVER ['REQUEST_METHOD'] === 'POST') {

     //echo "<pre>";
      //var_dump($_POST);
      //echo "</pre>";


    $titulo = mysqli_real_escape_string($DB, $_POST['titulo'] ) ;
    $precio = mysqli_real_escape_string($DB, $_POST['precio'] );
    $descripcion =mysqli_real_escape_string($DB, $_POST['descripcion'] );
    $habitaciones = mysqli_real_escape_string($DB, $_POST['habitaciones'] );
    $wc = mysqli_real_escape_string($DB, $_POST['wc'] );
    $estacionamiento =mysqli_real_escape_string ($DB, $_POST['estacionamiento'] ) ;
    $vendedores_id = mysqli_real_escape_string ($DB, $_POST['vendedores_id'] );
    $creado =  date('y/m/d');
    

    //asignar files hacia una variable

    $imagen = $_FILES['imagen'];

    


    if (!$titulo) {
        $errores[] ="y el titulo??";
    }

        if (!$precio) {
            $errores [] = 'el precio es obligatorio';

        }


        if (strlen(!$descripcion ) > 50 )  {
            $errores[] = 'papi que te pasa la descripcion debe de tener menos de 50 caracteres acaso que vas a escribir un libro';
        } 


        if (!$habitaciones) {
            $errores[] = 'indica cuantas habitaciones tiene mi rey';

        }

         if (!$wc){
            $errores[] = 'indica cuantos baños quiere';

         }       


         if (!$estacionamiento) {
            $errores[] = 'indica cuantos carros tiene';

         }



         if (!$vendedores_id) {
            $errores[] =' debe de decir el vendedor papuuu';
         }
         

  


        // validar por tamaño (100kb)

        $medida = 1000*1000;
     if($imagen ['size'] > $medida) {
            $errores[] = 'la imagen es muy pesada';

        }

       

        // revisar que el arreglo de errores este vacio

            if(empty($errores)) {

                $carpetaImagenes= '../../imagenes';
                
            if(is_dir($carpetaImagenes)) {
                echo "la carpeta ya existe";
            } else  {
                if(mkdir($carpetaImagenes)) {
                    echo "la caperta se creo con exito";
                }
               else {
                   echo "error al crear la carpeta";
                }
            }

                /**  subida de archivos*/

                if ($imagen['name']) {
                    
                //eliminar la imagen previa
                    unlink($carpetaImagenes . $propiedad['imagen']);
                }
              
             

           // Creamos carpetas
            



            //generar un nombre unico

           $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

            

            
              //subida de archivos

            move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . "/" .$nombreImagen. ".jpg" );


                




            // insertar base de datos

                $query = "UPDATE propiedades  SET titulo = '$titulo', precio = $precio, imagen = '$nombreImagen', descripcion = '$descripcion', habitaciones = $habitaciones, estacionamiento = $estacionamiento, wc = $wc, vendedores_id = $vendedores_id  WHERE id = $id ";

               // echo $query;
                



    $resultado= mysqli_query($DB, $query);

    if($resultado) {
        
        header('location:/admin/propiedades?resultado=2');
    }
            }

  


    //insertar en la base de datos

    

    //echo  $query; para mostrar
}




incluirTemplate('header');
?>



    <main class="contenedor seccion">
        <h1>ACTUALIZAR PROPIEDAD</h1>




        <a href="/admin/propiedades/index.php" class="boton boton-verde"> volver </a>


        <?php foreach($errores as $error): ?>
            <div class="alerta error">
           
            <?php echo $error ?>


            </div>
          

            <?php endforeach; ?> 
           

            <form class="formulario" method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend> informacion general</legend>
                <label for="titulo">titulo:</label>
                <input type="text" id="titulo" name="titulo" placeholder="titulo propiedad" value="<?php echo $titulo ?>">


                <label for="precio">precio:</label>
                <input type="number" id="precio" name="precio" placeholder="precio propiedad" value="<?php echo $precio ?>">


                <label for="imagen">imagen</label>               
    <input type="file"  id="imagen" accept="image/jpeg, image/png" name="imagen">
        <?php if (!empty($imagen)) : ?>
       <img src="../../imagenes/<?php echo $imagen; ?>.jpg" class="imagen-small">
            <?php endif; ?>

                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $descripcion; ?></textarea>


            </fieldset>

            <fieldset>
                <legend>informacion de la propiedad</legend>

                <label for="habitaciones">habitaciones:</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="ej: 3" min="1" max="9"  value="<?php echo $habitaciones ?>">


                
                <label for="wc">baños:</label>
                <input type="number" id="wc" name="wc" placeholder="ej: 3" min="1" max="9"  value="<?php echo $wc ?>">


                <label for="estacionamiento">estacionamiento:</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="ej: 3" min="1" max="9"  value="<?php echo $estacionamiento ?>">




            </fieldset>

            <fieldset>

            <legend>vendedor</legend>

            <select name="vendedores_id" value="<?php echo $vendedores_id ?>">
    <option value="">Seleccione el vendedor</option>
    <?php while($vendedor = mysqli_fetch_assoc($resultadoVendedores)): ?> 
        <option <?php echo $vendedor['id'] === $vendedores_id ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>">
            <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?>
        </option>
    <?php endwhile; ?>
</select>



            </fieldset>


            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>

    <?php

$inicio = true;
incluirTemplate('footer');

?>
