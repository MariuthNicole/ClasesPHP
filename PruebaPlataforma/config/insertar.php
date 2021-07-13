<?php
    include_once("conexionBD.php");

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['marca']) && isset($_POST['modelo']) && isset($_POST['numcompetidor']) && isset($_POST['categoria'])) {

        if($_POST['nombre'] !== "" && $_POST['apellido'] !== "" && $_POST['edad'] !== "" && $_POST['marca'] !== ""  && $_POST['modelo'] !== ""  && $_POST['numcompetidor'] !== ""  && $_POST['categoria'] !== "") {

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $edad = $_POST['edad'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $numcompetidor = $_POST['numcompetidor'];
            $categoria = $_POST['categoria'];
            

            $conexion = new Database;
            $resultado = $conexion->validarCorredor($numcompetidor);
            $contador = $resultado->rowCount();

        if($contador > 0){

            $confirm = 3;

        } else {

            $confirm = $conexion->insertar($nombre, $apellido, $edad, $categoria, $marca, $modelo, $numcompetidor);
                
        } 
    } else {

            $confirm = 2; 

        }
    }    
    
    header('Location: ../index.php?confirm='.$confirm);

    
?>