<?php
    
      class Conectar {

            protected $db;

            public function Conexion(){
               
                try{
                    /* TODO: Cadena de Conexion */

                    /* $conectar = new PDO("sqlsrv:Server=DESKTOP-89UA5ON\SQLEXPRESS;Database=CompraVenta","sa","123456"); */
                    /* $conectar = mysqli_connect('localhost', 'root', ''); */


                    $conectar = $this->dbh=new PDO("sqlsrv:Server=DESKTOP-89UA5ON\SQLEXPRESS;Database=CompraVenta","sa","123456");
                    return $conectar;
                }catch (PDOException  $e){
                    /* TODO: En caso de error mostrar mensaje */
                    echo "Error Conexion BD". $e->getMessage() ."<br/>";
                    
                }

            }           
       

        }


       
        


?>

