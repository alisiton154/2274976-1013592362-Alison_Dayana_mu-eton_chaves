<?php

$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contrasenia="";

try{
    
    $conexion=new PDO ("mysql:host=$servidor;dbname=album_1013592362", $usuario,$contrasenia );
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

//prin_r($resultado);

    print_r($resultado);

    foreach($resultado as $fotos){
        echo($fotos['nombre'])."<br/>";
    }





    echo "conexion establecida";
}catch(PDOException $error){
    echo "conexion erronea".$error;
}



?>