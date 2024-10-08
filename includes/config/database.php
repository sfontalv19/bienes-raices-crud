<?php


function conectarDB() : mysqli {
 $DB = new mysqli('localhost','root','sergio123','bienesraices_crud' ) ;

 $DB->set_charset('utf8');

 if (!$DB){

    echo "error no se puedo conectar a esa monda, lloralo papa";
    exit;

 }
 
 
 return $DB;

}