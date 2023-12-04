<?php
function tirarDado()
{
    do {
        $suerte = rand(1, 10);
    } while ($suerte <= 0 || $suerte > 10);
    
    return $suerte;
}
function obtenerNumeroSecreto($min, $max)
{
    do {
        $suerte = rand($min, $max);
    } while ($suerte < $min || $suerte > $max);

    return $suerte;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el número de intentos del formulario
    $intentos = isset($_POST['intentos']) ? (int)$_POST['intentos'] : 0;

    // Realizar el juego
    do {
        $intentos--;

        // Obtener tirada y número secreto
        $numeroTirada = rand(1, 10);
        $secretNumber = rand(1, 10);

        // Mostrar resultados
        echo "<p>Intentos restantes: $intentos</p>";
        echo "<p>Tirada actual: $numeroTirada</p>";

        if ($numeroTirada == $secretNumber) {
            echo "<p>Acertado</p>";
            break;
        }

    } while ($intentos > 0);

    if ($intentos === 0) {
        echo "<p>Agotaste tus intentos. El número secreto era: $secretNumber</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6. Adivina número secreto</title>
    </head>
    <body>
        <h1>Ejercicio 6. Adivina número secreto</h1>
        <p>Realice una aplicación que permita averiguar un número secreto entre 0 y 10, permitiendo que el usuario pueda escoger el número de intentos.</p>
        <b>Intentos: </b><p id="intentos"></p>
        <b>Numero Tirada: </b><p id="tirada"></p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="intentos">Introduce el número de intentos:</label>
            <input type="number" name="intentos" required>
            <button type="submit">Jugar</button>
        </form>
    </body>
</html>