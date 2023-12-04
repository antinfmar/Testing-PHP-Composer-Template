<?php
function menu1(){
    // Implementa la opción de la calculadora que permite sumar.
    echo "Suma:\n";
    $sumando1 = (int)readline("Introduzca el primer sumando: ");
    $sumando2 = (int)readline("Introduzca el segundo sumando: ");
    $resultado = $sumando1 + $sumando2;
    echo "El resultado de la suma $sumando1 + $sumando2 es $resultado\n";
    return $resultado;
}

/**
 * Implementa el Menú 2: Restar
 * @return int
 */
function menu2(){
    // Implementa la opción de la calculadora que permite restar.
    echo "Resta:\n";
    $minuendo = (int)readline("Introduzca el primer minuendo: ");
    $sustraendo = (int)readline("Introduzca el primer sustraendo: ");
    $resultado = $minuendo - $sustraendo;
    echo "El resultado de la resta $minuendo - $sustraendo es $resultado\n";
    return $resultado;
}

/**
 * Implementa el Menú 3: Multiplicar
 * @return int
 */
function menu3(){
    // Implementa la opción de la calculadora que permite multiplicar.
    echo "Multiplica:\n";
    $multi1 = (int)readline("Introduzca el primer multiplicador: ");
    $multi2 = (int)readline("Introduzca el segundo multiplicador: ");
    $resultado = $multi1 * $multi2;
    echo "El resultado de la multiplicación $multi1 * $multi2 es $resultado\n";
    return $resultado;
}

/**
 * Implementa el Menú 4: Dividir
 * @return float
 */
function menu4(){
    // Implementa la opción de la calculadora que permite dividir.
    echo "Divide:\n";
    $divisor1 = (int)readline("Introduzca el primer divisor: ");
    $divisor2 = (int)readline("Introduzca el segundo divisor: ");
    $resultado = $divisor1 / $divisor2;
    echo "El resultado de la división $divisor1 / $divisor2 es $resultado\n";
    return $resultado;
}

/**
 * Menú Aplicación Calculadora
 */
function appMenu(){
    $opcion = -1;
    do {
        echo "\n*** CALCULADORA ***\n";
        echo "Menú:\n";
        echo "1. Sumar\n";
        echo "2. Restar\n";
        echo "3. Multiplicar\n";
        echo "4. Dividir\n";
        echo "0. Salir\n";
        $opcion = (int)readline("Introduzca opción: ");

        switch ($opcion) {
            case 1: menu1(); break;
            case 2: menu2(); break;
            case 3: menu3(); break;
            case 4: menu4(); break;
            case 0: echo "Saliendo aplicación calculadora.\n"; break;
            default: echo "Error: Opción $opcion incorrecta.\n"; break;
        }
    } while ($opcion != 0);
}

// Ejecutar la aplicación
appMenu();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 12. Calculadora Javascript</title>
    </head>
    <body onload="appMenu()">
        <h1>Ejercicio 12. Calculadora Javascript</h1>
        <p>Implementa una calculadora con un menú similar al siguiente:</p>
        <pre>
            Menu:
            -----
                1. Sumar
                2. Restar
                3. Multiplicar
                4. Dividir

                0. Salir

            Introduzca opción:
        </pre>
        <i>Active las Herramientas del desarrollador</i>
        <script src="js/ejercicio12.js">
        </script>
    </body>
</html>