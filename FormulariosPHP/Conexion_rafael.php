<?php 

$conexion = new mysqli('localhost', 'root','prueba_datosrafael');

if ($conexion->connect_errno){
    die('Lo siento hubo un problema con el servidor');
} else { 
}