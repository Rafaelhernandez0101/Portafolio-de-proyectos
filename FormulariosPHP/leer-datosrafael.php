<?php 

$conexion = new mysqli('localhost', 'root', '','prueba_datosrafael'); 

if($conexion->connect_errno) {
    die('Lo siento hubo un problema con el servidor');
} else { 
    $sql = "select * from usuarios"; 
    $resultado = $conexion->query($sql);

    if($resultado->num_rows){ 

        while($fila = $resultado->fetch_assoc()){
        echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
    } 
} else { 
    echo 'no hay datos';
}
}