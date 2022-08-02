<?php

if($_POST){ // Si hubo envio se imprime el nombre.

// Recibir información del formulario HTML (Método POST).
$nombre=$_POST['txtNombre'];

echo "Hola, ".$nombre;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- 
Se utiliza un documento PHP, un documento HTML y un formulario. 
El formulario hace un envío a “ejercicio2.php”, se lo envía a sí mismo y cuando se envíe la información por un método de nombre “post”. 
La información que pasará es el nombre y el “Enviar”
-->

<body>
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>