<?php




require '/apache/htdocs/bienesraices/includes/templates/funciones.php';
require '/apache/htdocs/bienesraices/includes/config/database.php';
require __DIR__ . '../../../vendor/autoload.php';

// conectarnos a la base de datos

$DB= conectarDB();

use App\propiedad;


propiedad :: setDB($DB);






