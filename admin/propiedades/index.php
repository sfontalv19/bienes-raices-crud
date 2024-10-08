<?php
session_start();
require '/apache/htdocs/bienesraices/includes/templates/app.php';
$auth = $_SESSION['login'];

use App\propiedad;

// Conexión a la base de datos
require_once '/apache/htdocs/bienesraices/includes/config/database.php';
$DB = conectarDB();
propiedad::setDB($DB);

// Obtener todas las propiedades usando Active Record
$propiedades = propiedad::all();

// Mostrar mensaje condicional
$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {   
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if ($id) {


        $propiedad = propiedad::find($id);
        $propiedad -> eliminar();
        // Eliminar el archivo de imagen
       
        // Eliminar la propiedad
        
      

        if ($resultado) {
            header('Location: /admin/propiedades/index.php');
        }
    }
}

// Incluir el template
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Administrador de Bienes Raíces</h1>

    <?php if (intval($resultado) === 1) : ?> 
        <p class="alerta exito">Anuncio creado correctamente</p>
    <?php elseif (intval($resultado) === 2) : ?>
        <p class="alerta exito">Anuncio actualizado correctamente</p>
    <?php elseif (intval($resultado) === 3) : ?>
        <p class="alerta exito">Anuncio eliminado correctamente</p>
    <?php endif; ?>

    <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

    <table class="propiedades">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Imagen</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($propiedades as $propiedad) : ?>
                <tr>
                    <td><?php echo $propiedad->id; ?></td>
                    <td><?php echo $propiedad->titulo; ?></td>
                    <td>
                        <img src="/imagenes/<?php echo $propiedad->imagen . '.jpg'; ?>" class="imagen-tabla" alt="imagen">
                    </td>
                    <td><?php echo "$" . $propiedad->precio; ?></td>
                    <td> 
                        <form method="POST" class="w-100">
                            <input type="hidden" name="id" value="<?php echo $propiedad->id; ?>">
                            
                            <input type="submit" class="boton-rojo-block" value="Eliminar">
                        </form>
                        
                        <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad->id; ?>" class="boton-amarillo-block">Actualizar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php
incluirTemplate('footer');