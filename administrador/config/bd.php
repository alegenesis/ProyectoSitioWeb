<?php
$host="localhost";
$bd="sitio";
$usuario="root";
$clave="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$clave);
        
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>
