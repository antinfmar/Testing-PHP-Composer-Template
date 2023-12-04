<?php
function fibonacci($n) {
    $vector = array(); // Creamos un array para almacenar el cálculo
    $i = 0;

    if ($n <= 0) {
        return $vector;
    }

    do {
        if ($i == 0 || $i == 1) {
            $vector[$i] = 1;
            $i++;
            continue;
        }

        $vector[$i] = $vector[$i - 2] + $vector[$i - 1];
        $i++;
    } while ($i < $n);

    return $vector; // Retorno de la función
}
$n = 10;
$resultado=$_GET['resultado'];
$resultado = fibonacci($n);

echo "Secuencia de Fibonacci para los primeros $n términos: ";
echo implode(", ", $resultado);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 7. Series de Fibonacci</title>
    </head>
    <body onload="appMain();">
        <h1>Series de Fibonacci</h1>
        <p>
            Realizar las series de Fibonacci.
        </p>
        <code>Fibonacci(n) = 1 1 2 3 5 8 13 21 34 ...</code>
        <br/><br/><i style="color:red;">Recuerde activar las Herramientas del desarrollador del Navegador Web.</i>
        <p id="resultado"></p>
    </body>
</html>