<?php



define('TEMPLATES_URL', __DIR__ . '/../templates');
define('FUNCIONES_URL', __DIR__ . '/funciones.php'); // Agrega una barra diagonal antes de funciones.php
define ('CARPETA_IMAGENES',__DIR__ .'/../../imagenes/'); 


function incluirTemplate(string $nombre, bool $inicio = false) {
        include TEMPLATES_URL . "/$nombre.php";
}


function estaAutenticado() {
    session_start();

        if (!$_SESSION ['login']) {
        header ('Location : /');
    } 
}


function debug($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}


// escapa o sanatizar el html muy importante 
 // s = sanitizar

function s($html) :string {
    $s= htmlspecialchars($html,);
    return $s;
}