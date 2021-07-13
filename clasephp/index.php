<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    //impresiones de texto
    echo "<h1>HOLA MUNDO<h1>";
    //variables
    $nombre = "Mariuth Marin";
    $edad = 16;
      //<h3>minombre Edad: 23 años </h3>;
       //(|.| concatenacion o union de expresiones")
       echo '<h3>' .$nombre.' Edad: '.$edad.' años </h3>';

       // EJEMPLO DE COMO SUMAR O ACUMULAR 
       //$edad | += | 10
       $edad .= 10;
       echo '<h3>'.$edad.'</h3>';

       //condicionales

       if($edad > 17){
            echo '<h3>es mayor de edad</h3>';
       } else {
            echo '<h3>es menor de edad</h3>';
       }
       

      
       //iteraciones en PHP
       for ($i = 1; $i <= 5; $i++){
        echo '<h4>iteracion no'.$i.'<h4>';
       }
    
     ?>
    
</body>
</html>