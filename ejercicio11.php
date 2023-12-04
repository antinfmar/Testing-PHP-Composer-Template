<?php
$numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numeros as $x) {
    echo "Tabla de multiplicar del $x <br/>";
    echo "-----------------------------------------<br/>";

    foreach ($numeros as $y) {
        echo "$x x $y = " . ($x * $y) . "<br/>";
    }

    echo "<br/>";
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 11. Bucle For-in: Tabla de multiplicar</title>
    </head>
    <body>
        <h1>Ejercicio 11. Bucle For-in: Tabla de multiplicar</h1>
        <p>Modifique este HTML</p>
    </body>
</html>