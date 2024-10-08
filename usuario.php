<?php  

// importar la conexion


require '../bienesraices/includes/config/database.php';

$DB =conectarDB();

// crear un email yu password

$email = "correo@correo.com";
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);



// query para crear el usuario

$query = " INSERT INTO usuarios (email, password)  VALUES ('$email', '$passwordHash' );";


echo $query;


// agregarlo a la base de datos


mysqli_query($DB, $query);


?>;