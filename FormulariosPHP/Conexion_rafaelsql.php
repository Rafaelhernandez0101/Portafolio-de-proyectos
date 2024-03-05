<?php 

$conexion = new mysqli('localhosto', 'root', '', 'prueba de datos'); 

if($conexion->connect_errno) {
    die('Lo siento hubo un probema con el servidor');
} else {
    $sql = "INSERT INTO usuarios(id, nombre, edad) VALUES (null, 'kely', 29)";
    $conexion->query($sql);
    if($conexion->affected_rows >= 1) {
        echo 'filas agregadas: ' . $conexion->affected_rows;
    }
}

