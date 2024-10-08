<?php


require 'includes/templates/app.php';
$DB= conectarDB();
// autenticar el usuario


$mistake = [];

if ( $_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string ($DB, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) );


    $password = mysqli_real_escape_string($DB, $_POST['password']);

    if(!$email) {
        $mistake [] = "el email es obligatorio o no es valido";

    }

    if(!$password){
        $mistake [] = 'el password es incorrecto';
    }



    if (empty($mistake)) {
        // revisar si el usuario existe

        $query = "SELECT * FROM usuarios WHERE email ='$email' ";
        $resultado = mysqli_query ($DB, $query);

        if ($resultado -> num_rows) {
            // revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

                // verificar si el password es correctto

                $auth = password_verify($password, $usuario['PASSWORD']);

                if ($auth) {
                    session_start();

                    // llenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario ['email'];
                    $_SESSION['login'] = true;

                    header ('Location: /admin/propiedades');
                   
                } else {
                    $mistake [] = "el password es incorrecto";
                }
                
                

        } else {
            $mistake [] = " el usuario no existe";
        }

    }
}



// incluye el header




incluirTemplate('header');
?>



    <main class="contenedor seccion">
        <h1>iniciar seccion</h1>

        <?php
        foreach ($mistake as $error): ?>  
        <div class="alerta error">
        <?php echo $error; ?>
        </div>

        
        
        <?php endforeach; ?>



        <form class="formulario"  method="POST"  novalidate>
        <fieldset >
            <legend> email y password </legend>


            <label for="email" >E-mail</label>
            <input type="email" name="email" placeholder="tu email" id="email"  >


            <label for="password" >password</label>
            <input type="password" name="password" placeholder="tu password" id="password" >


        </fieldset>

        <input type="submit" value="Iniciar Secion" class="boton boton-verde">
        </form>

    </main>

    <?php

$inicio = true;
incluirTemplate('footer');

?>
