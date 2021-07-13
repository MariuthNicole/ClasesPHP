<?php

    class Database {

        public $db;
            private static $dns = "mysql:host=localhost;dbname=plataformaprueba"; 
            private static $user = "root";  
            private static $pass = "";      
            private static $instance;      

        public function __construct() {
            $this->db = new PDO(self::$dns, self::$user, self::$pass);         
        }

        public static function getInstance() {
            if(!isset(self::$instance)) {
                $object = __CLASS__;
                self::$instance = new $object;
            }

                return self::$instance;
        }

        public function insertar($nombre, $apellido, $edad, $categoria, $marca, $modelo, $numcompetidor) {


            try {
                $conexion = Database::getInstance(); 
                $query = $conexion->db->prepare("INSERT INTO prueba (nombre, apellido, edad, categoria, marca, modelo, numcompetidor) VALUES (:nombre, :apellido, :edad, :categoria, :marca, :modelo, :numcompetidor)");
                $query->execute(
                    array(

                        ':nombre'     => $nombre,
                        ':apellido'   => $apellido,
                        ':edad'       => $edad,
                        ':categoria'  => $categoria,
                        ':marca'      => $marca,
                        ':modelo'     => $modelo,
                        ':numcompetidor'    => $numcompetidor

                    )
                );

                return 1; 

            } catch(PDOException $error){

                return 0; 
            }
        }

        public function validarCorredor($numcompetidor) {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT numcompetidor FROM prueba WHERE numcompetidor=:numcompetidor");
            $query->execute(
                array(
                    ":numcompetidor" => $numcompetidor
                   )
                );
            return ($query);
        }

        public function datosCorredores() {
            $conexion = Database::getInstance();
            $query = $conexion->db->prepare("SELECT * from prueba");
            $query->execute();
            return $query;
            
        }
    }
        
?>