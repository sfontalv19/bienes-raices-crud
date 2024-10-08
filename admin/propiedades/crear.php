<?php

require '/apache/htdocs/bienesraices/includes/templates/app.php';

use App\propiedad;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

estaAutenticado();

// consultar para obtener vendedores


// instancia de propiedad

$propiedad = new propiedad();   


$DB = conectarDB();



//consulta de vendedores
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($DB, $consulta);

// arreglo con mensaje de errores

$errores = propiedad::getError();

// ejecualtar el codigo despues que el usuario envia

if($_SERVER ['REQUEST_METHOD'] === 'POST') {
    
// crea una nueva instancia

    $propiedad = new propiedad($_POST);   

    
    $carpetaImagenes= '../../imagenes';
                

    //generar un nombre unico

    $nombreImagen = md5(uniqid(rand(), true));

        // setear la imagen

        if($_FILES['imagen']['tmp_name']) {
            $manager = new ImageManager(Driver::class);
            $imagen = $manager->read($_FILES['imagen']['tmp_name']);
            $imagen->cover(800, 600);
            $propiedad->setImagen($nombreImagen);
          }

          // validamos 
      
    $errores = $propiedad->validate();

        // revisar que el arreglo de errores este vacio

                if(empty($errores)) {



            // crear la carpeta de imagen

                    if(!is_dir(CARPETA_IMAGENES) ){
                        mkdir(CARPETA_IMAGENES);
                    }                  
                 
            

    //guardar la imagen en el servidor

    $imagen-> save(CARPETA_IMAGENES  . $nombreImagen.'.jpg');

                  
                    //guardar en la base de datos
                 $resultado =   $propiedad->save();
         //mensaje de exito o error           

    if($resultado) {
        
        header('location:/admin/propiedades?resultado=1');
    }
            }

  


    //insertar en la base de datos

    

    //echo  $query; para mostrar
}

incluirTemplate('header');
?>



    <main class="contenedor seccion">
        <h1>crear</h1>




        <a href="/admin/propiedades/index.php" class="boton boton-verde"> volver </a>


        <?php foreach($errores as $error): ?>
            <div class="alerta error">
           
            <?php echo $error ?>


            </div>
          

            <?php endforeach; ?> 
           

        <form class= "formulario"  method="POST" action="/admin/propiedades/crear.php"  enctype="multipart/form-data">
                
        <?php 
            include '../../includes/templates/formulario_propiedades.php';

               ?>        

            <input type="submit" value="crear propiedad" class="boton boton-verde">
        </form>
    </main>

    <?php

$inicio = true;
incluirTemplate('footer');

?>
