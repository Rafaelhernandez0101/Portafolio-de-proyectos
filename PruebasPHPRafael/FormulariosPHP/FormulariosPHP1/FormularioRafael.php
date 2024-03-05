<?php

# obteniendo datos mediante el metodo post

  print_r($_post); 

  if (!$_post) {
     header ('Location: Http//localhost/formularios/'); 
 }

 $nombre = $_POST ['nombre']; 
 $sexo = $_POST ['sexo']; 
 $year = $_POST ['year']; 
 $Terminos = $_POST ['terminos']; 
 

 echo ' hola ' . $nombre . ' eres ' . $sexo; 

# Obteniendo datos mediante el motodo GET 

if (!$_GET) {
  header('location: http://localhost/formularios/'); 
} 

$nombre = $_GET ['nombre']; 
$sexo = $_GET ['sexo']; 
$year = $_GET ['year']; 
$Terminos = $_GET ['terminos'];

if ($nombre) {
  echo $nombre . '<br />'; 
} else {
  echo "El usuario no establecio el nombre <br>"; 
}

echo $sexo . '<br />';
echo $year . '<br />'; 
echo $Terminos . 'br /'; 

?>
