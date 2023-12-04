<?php
function procesarCadenas(){
    // Elemento HTML
    $mayusculasHTML = $_POST["mayusculas"] ?? "";
    $fullNameHTML = $_POST["fullName"] ?? "";

    // Obtenemos el NOMBRE que se ha introducido en el formulario
    $nombre = $_POST["nombre"] ?? "";
    echo "Nombre: $nombre\n";

    // Obtenemos los APELLIDOS que se han introducido en el formulario
    $apellidos = $_POST["apellidos"] ?? "";
    echo "Apellidos: $apellidos\n";

    // Convertimos el NOMBRE a MAYÚSCULAS
    $NOMBRE = strtoupper($nombre);
    echo 'NOMBRE: ' . $NOMBRE . "\n";
    $mayusculasHTML = $NOMBRE;

    // Convertimos el NOMBRE a minúsculas
    echo 'nombre: ' . strtolower($NOMBRE) . "\n";

    // Obtenemos la longitud del NOMBRE
    $longitud = strlen($NOMBRE);
    echo "La longitud de $nombre es $longitud\n";

    // Concatena el Nombre y los Apellidos
    $fullName = $nombre . ' ' . $apellidos;
    // Obtén la longitud de la nueva cadena.
    $longitudFull = strlen($fullName);
    echo "Nombre completo: $fullName ($longitudFull)\n";
    $fullNameHTML = "$fullName ($longitudFull)";

    // Del Nombre completo extrae la subcadena comprendida entre las posiciones 5 y 10.
    $extracto = substr($fullName, 5, 10);
    echo "Extracto [5 a 10]: $extracto\n";

    // Del Nombre completo extrae los 3 primeros caracteres.
    $extracto = substr($nombre, 0, 3);
    echo "Tres primeros caracteres: $extracto\n";

    // En el Nombre completo reemplaza Pedro por Antonio
    $nuevoNombre = str_replace("Antonio", "Pedro", $fullName);
    echo "Nuevo nombre: $nuevoNombre\n";
}

// Llama a la función
procesarCadenas();

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 13. Cadenas en Javascript</title>
    </head>
    <body>
        <h1>Ejercicio 13. Cadenas en Javascript</h1>
        <p>En este ejercicio vamos a estudiar los metodos más importantes que existen para el manejo de cadenas en Javascript.</p>
        <form>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Por ejemplo: Pedro" required><br/><br/>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos"><br/><br/>
            <input type="button" value="Checkear" onclick="procesarCadenas()">
            <input type="reset">
        </form>
        <br><br/>
        <i style="color:red;">Activa las Herramientas del desarrollador del Navegador Web.</i>
        <p style="font-weight:bold;">MAYÚSCULAS: </p>
        <p id="mayusculas"></p>
        <p>NOMBRE COMPLETO:</p>
        <p id="fullName"></p>
    </body>
</html>