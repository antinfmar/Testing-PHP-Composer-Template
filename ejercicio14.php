<?php
function calcularMedia($v){    // IMPLEMENTA TU CODIGO AQUÍ
    if (count($v) == 0) {
        return 0;
    }

    $suma = array_sum($v);
    $resultado = $suma / count($v);
    return $resultado;
}
function calcularMinimo($v){
    // CORRIGE E IMPLEMENTA EL CODIGO
    if (count($v) == 0) {
        return 0;
    }

    $minima = min($v);
    return $minima;
}
function calcularMaximo($v){
    if (count($v) == 0) {
        return 0;
    }

    $maxima = max($v);
    return $maxima;
}
function contarAprobados($v){
    $aprobados = array_filter($v, function ($number) {
        return $number >= 5;
    });

    // COMPLETA TU CODIGO

    return count($aprobados);
}
function contarSuspensos($v){
    $suspensos = array_filter($v, function ($number) {
        return $number < 5;
    });

    // COMPLETA TU CODIGO

    return count($suspensos);
}
$valores = [8, 6, 4, 7, 3, 9, 5];
echo "Media: " . calcularMedia($valores) . "\n";
echo "Mínimo: " . calcularMinimo($valores) . "\n";
echo "Máximo: " . calcularMaximo($valores) . "\n";
echo "Aprobados: " . contarAprobados($valores) . "\n";
echo "Suspensos: " . contarSuspensos($valores) . "\n";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 14. Arrays - Cálculos con notas</title>
    </head>
    <body onload="appMain();">
        <h1>Ejercicio 14. Arrays - Cálculos con notas</h1>
        <p>
            Obtén información estadística a partir de las notas de los alumnos:
            <ul>
                <li>Nota media.</li>
                <li>Nota minima.</li>
                <li>Nota máxima.</li>
                <li>Número de aprobados.</li>
                <li>Número de suspensos.</li>
            </ul>
        </p>
        <script src="js/ejercicio14.js"></script>
    </body>
</html>