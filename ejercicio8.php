<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    // Suma, resta, division, multiplicación.
    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $divi=$valorA/$valorB;
    $multi=$valorA*$valorB;

    echo "La suma es: ".$suma."<br/>";
    echo "La resta es: ".$resta."<br/>";
    echo "La division es: ".$divi."<br/>";
    echo "La multiplicación es: ".$multi."<br/>";
}

?>

<!DOCTYPE html>

<!--Operadores aritméticos en php.-->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br/>
        valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>