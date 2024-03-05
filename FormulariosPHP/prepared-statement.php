<?php
$conexion = new mysqli('localhost', 'root', '', 'registro');
if ($conexion -> connect_errno){
    die('Lo siento hubo un problema con el servidor');
} else {
    $statement = $conexion->prepare("INSERT INTO aprendiz(id, nombre, edad, telefono) VALUES (?,?,?,?)");

    $statement -> bind_param ('ssi', $id, $nombre, $edad, $telefono);
    $id = NULL;

    if (isset($_GET['nombre']) && isset($_GET['edad']) && isset($_GET['correo'])){
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
        $correo = $_GET['correo'];
    }
    

    $statement -> execute();

    if ($conexion -> affected_rows >= 1){
        echo 'Filas agregadas:' . $conexion -> affected_rows;
    }else{
        echo 'No se agrego nada';
    }
}