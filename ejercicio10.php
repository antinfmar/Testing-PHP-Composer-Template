<?php 
$i = 0;

while ($i <= 10) {
    echo "Tabla de multiplicar del $i <br/>";
    echo "-----------------------------------------<br/>";
    $j = 0;

    while ($j <= 10) {
        echo "$i x $j = " . ($i * $j) . "<br/>";
        $j++;
    }

    echo "<br/>";
    $i++;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 10. Bucle while: Tabla de multiplicar</title>
    </head>
    <body>
        <h1>Ejercicio 10. Bucle while: Tabla de multiplicar</h1>
        <p>Modifique este HTML</p>
    </body>
</html>