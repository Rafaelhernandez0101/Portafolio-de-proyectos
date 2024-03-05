<?php 

$errores = ''; 

if (isset($_POST ['submit'])) { 
    $nombre = $_POST ['nombre']; 
    $correo = $_POST ['correo']; 
    

    # Si no esta vacio el nombre entonces comprobamos el texto

    if (!Empty($nombre)) {

    

//Remueve los signos que no deben ir en una cadena 
     $nombre = filter_var($nombre, FILTER_SANITIZE_STRING); 
     echo 'Tu nombre es: ' . $nombre . '<br>'; 
    } else {
        $errores .= 'por favor ingresar un nombre <br />';
    }

    if (!empty($correo)) { 
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); 

        if (!empty($correo)) {
            $errores .= 'por favor ingresar u ncorreo valido <br />'; 
        } else {
            echo 'Tu correo es: ' . $correo;
        }
    }


     } else {
        $errores .= 'por favor ingresar un correo <br />'; 
     } 



?> 

<!<!DOCTYPE html>

<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>Documento</title>
    <style> 
     .error {color:red;}
    </style> 
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER[' PHP_SELF ']); ?>" method="post"> 
    <input type="text" name=nombre placeholder="nombre">
    <input type="text" name="correo" placeholder="correo">

    <?php if (!empty($errores)): ?>
        <div class="error"><?php echo $errores; ?> </div>
    <?php endif; ?>

    <input type="submit" name="submit">
</form>
</body>
</html>

