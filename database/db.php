<?php

$host="localhost";
$bd="bd_jpiw";
$usuario="root";
$contrasenia="";

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>