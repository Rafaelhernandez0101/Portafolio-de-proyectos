<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="utf-8">
<title>AAAAAAAAAAAAAAAA</title>
</head> 
<body>
    <Form action="Recibe.php" name="formulario_contacto" method="post">
        <input type="text" placeholder="Nombre" name="nombre" id="nombre">
        <input type="text" placeholder="Edad" name="edad" id="edad">
        <br>



<!--Radio Buttom--> 
     <label for="Hombre">Hombre</label>
     <input type="radio" name="sexo" id="Hombre" value="hombre">
     <br>

     <label for="mujer">Mujer</label>
     <input type="radio" name="sexo" id="mujer" value="mujer">
     <br>



<!--Combobox-->
         <Select name="Year" id="Year"> 
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        
         </Select>
         <br>


<!--Checkbox-->
     <label for="Terminos">Terminos y condiciones</label>
     <input type="Checkboc" name="Terminos" value="Ok" id="Terminos">
     <br> 

     <input type="Submit" name="btn-enviar" value="Enviar">
</form>
</body>
</html>
