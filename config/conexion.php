<?php

    session_start();
    
      class Conectar {

            protected $db;

            public function Conexion(){
               
                try{
                    /* TODO: Cadena de Conexion */
                    /* $conectar = mysqli_connect('localhost', 'root', '');  */  
                    $conectar = new PDO("mysql:host=localhost;dbname=compraventa1", "root", "");                
                    return $conectar;
                }catch (PDOException  $e){
                    /* TODO: En caso de error mostrar mensaje */
                    echo "Error Conexion BD". $e->getMessage() ."<br/>";
                    
                }

            }           
       
            public static function ruta(){
                return "http://localhost/PERSONAL_CompraVenta/";
            }


        }


      





?>



