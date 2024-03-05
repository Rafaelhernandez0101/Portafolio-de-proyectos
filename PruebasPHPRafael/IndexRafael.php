// CODIGO COMBINADO CON HTML 
<!<!<!DOCTYPE html>
<html>
<head> 
    <title> </title>
</head>
<body>
<h1> 
        <?php
        echo "Centro de industria y contruccion";
        ?> </h1>
</body>
</html>>



// VARIABLES 
<?php 

$nombre = 'jhon';
$num = 2022; 
$num_dec = 4.5; 
$varboleano = false; 
echo 'Hola, ' .$nombre;

echo gettype($nombre);
?>



// CONSTANTES 
<?php 
define('A',30);
define('nombre','SENA'); 

echo A;
echo nombre;
?>



// ARREGLOS 
<?php 
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
echo $semana[1];

$varios = array('lunes','martes',3,4,true);
echo $varios[2];
?>



// ARREGLOS ASOCIATIVOS
<?php

$jhon = array('telefono' => '12345', 'edad' => 30, 'apellido' => 'vaquiro', 'pais' => 'colombia');

$jhon['telefono'] = '34567';

echo 'El telefono de jhon es: ' . $jhon['telefono'];
?>



// ARREGLOS MULTIDIMENSIONALES 
<?php 

$amigos = array(
    array('jhon', 30),
    array('Paula', 1),
    array('Kely', 28)
); 

echo $amigos [0][0] . ' ' .$amigos[0][1].'<br />';
echo $amigos [1][0] . ' ' .$amigos[1][1].'<br />';
echo $amigos [2][0] . ' ' .$amigos[2][1].'<br />'; 

?>



// CONTAR ARREGLOS
<?php

$meses = array(
    'enero', 'febrero', 'marzo', 'abril', 
    'mayo', 'junio', 'julio', 'agosto', 
    'septiembre', 'octubre', 'noviembre', 'diciembre'
); 

echo count($meses);
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];

?>



// RECORRER UN ARREGLO CON FOREACH 
<?php 

$meses = array(
    'enero', 'febrero', 'marzo', 'abril', 
    'mayo', 'junio', 'julio', 'agosto', 
    'septiembre', 'octubre', 'noviembre', 'diciembre'
); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Meses del año</tittle>
</head>

<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
        foreach ($meses as $mes){
            echo '<li>' . $mes . '</liv>'; 
        }
        ?>
    </ul>
</body>
</html>