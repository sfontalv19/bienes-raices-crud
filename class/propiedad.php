<?php

namespace App;


class propiedad {

    // base de datos
    protected static $DB;
    protected static $columndb= ['id','titulo','precio','imagen','descripcion','habitaciones','wc','creado','vendedores_id'];

    //  errores o validacion
    protected static $errores =[];

   

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;

    public $estacionamiento;

    public $creado;

    public $vendedores_id;

    public function __construct($args =[])
    {
        $this->id = $args ['id'] ?? '';
        $this->titulo = $args ['titulo'] ?? '';
        $this->precio = $args ['precio'] ?? '';
        $this->imagen = $args ['imagen'] ?? '';
        $this->descripcion = $args ['descripcion'] ?? '';
        $this->habitaciones = $args ['habitaciones'] ?? '';
        $this->wc = $args ['wc'] ?? '';
        $this->estacionamiento = $args ['estacionamiento'] ?? '';
        $this->creado = $args['creado'] ?? date('Y-m-d');
        $this->vendedores_id = $args ['vendedores_id'] ?? '';
        $this ->imagen = $args ['imagen'] ?? '';

    }


    
    // definir la conexion a la BD
    public static function setDB ($database) {
        self:: $DB = $database;
    }




    public function save () {
    
        // sanitizar los datos
        
       $data = $this ->sanitizeData();
        
        
        // insertar base de datos    
        $query = "INSERT INTO propiedades  ( ";
        $query .= join (', ', array_keys($data));
        $query .=  " ) VALUES (' ";
        $query .=  join("', '", array_values($data));
        $query .=  " ') ";  
        
       
       
        $resultado = self:: $DB -> query($query); 

           return $resultado;     
}


// validar cuales tenemos 
public function attribute(){
    $attribute = [];
    foreach(self::$columndb as $column) {
        if($column === 'id') continue;
        $attribute[$column] = $this->$column;
    }

    return $attribute;
}

        //sanitizar
        public function sanitizeData () {
            $attribute = $this->attribute();
            $sanitized = [];
        
            foreach($attribute as $key => $value) {
                // Realizar operaciones de sanitización aquí, por ejemplo, eliminar etiquetas HTML
                $sanitized[$key] = self::$DB-> escape_string($value);
            }

        
          return $sanitized;
        }



        // subida de archivos

        public function setImagen($imagen) {

            if(isset($this->id)) {
                $this -> borrarImagen();
            }
            // asignar al atributo de imagen el nombre de la imagen
      


       // asignar al atributop imagen 
       if($imagen) {
        $this-> imagen= $imagen;
       }

    }
        // elimina el archivo 
        public function borrarImagen(){
            $exiteArchivo = file_exists(CARPETA_IMAGENES . $this->imagen);
            if($exiteArchivo){
             unlink(CARPETA_IMAGENES . $this->imagen);
            }
     
     
        }

    // validacion

    public static function getError() {
        return self::$errores;
    }


    public function validate(){
      

        if (!$this->titulo) {
           self::$errores[] ="y el titulo??";
        }
    
            if (!$this->precio) {
                self::$errores [] = 'el precio es obligatorio';
     
            }
    
    
            if (strlen(!$this->descripcion ) > 50 )  {
                self:: $errores[] = 'papi que te pasa la descripcion debe de tener menos de 50 caracteres acaso que vas a escribir un libro';
            } 
    
    
            if (!$this->habitaciones) {
                self:: $errores[] = 'indica cuantas habitaciones tiene mi rey';
    
            }
    
             if (!$this->wc){
                self:: $errores[] = 'indica cuantos baños quiere';
    
             }       
    
    
             if (!$this->estacionamiento) {
                self::$errores[] = 'indica cuantos carros tiene';
    
             }
    
    
    
             if (!$this->vendedores_id) {
                self:: $errores[] =' debe de decir el vendedor papuuu';
             }

              
    
             if(!$this->imagen ){
              self:: $errores[] ='sube la foto cv';
           }      
    
    
           return self::$errores;
                         
       
    }

    // lista todas las propiedades

    public static function all(){
        $query = "SELECT * FROM propiedades";
        $resultado = self:: consultarsql($query);
        return $resultado;
    
   
    }

    // buscar una propiedad por su id 

    public static function find($id) {
        $query = "SELECT * FROM propiedades WHERE id = $id";

        $resultado =self:: consultarsql($query);

        return  array_shift($resultado);
    }

        
    


        public static function consultarsql($query)
        {
            // consultar base de datos

            $resultado = self::$DB ->query($query);

            // iterar los resultados

            $array =[];
                        while ($registro = $resultado -> fetch_assoc() ) {
                $array[] = self::crearobjeto($registro) ;
            }
                
          


            // liberar la meroria 

                    $resultado -> free();


            //retornar los resultados 

            return $array;
        }

        protected static function crearobjeto($registro){
                $objeto = new self;

                foreach($registro as $key => $value) {
                    if(property_exists($objeto, $key)) {
                        $objeto->$key =$value;

                    }
                }
                return $objeto;
        }


// sincroniza el objeto en memoria con los cambios realizado por el usuario
        public function sincronizar( $args =[]) {
           foreach($args as $key => $value) {
            if(property_exists($this, $key) && is_null($value) ){
                $this->$key = $value;
            }
           }
        }

        public function eliminar() {
            $query = "DELETE FROM propiedades WHERE id = " . self::$DB->escape_string($this->id) . " LIMIT 1";
            $resultado = self::$DB->query($query);
        
            if ($resultado) {
                $this->borrarImagen();
            }
        }
  
}



