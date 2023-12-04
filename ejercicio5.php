<?php
function esMayorEdad($edad){
    if ($edad>=18) {
        return true;
    }
    return false;
    // Debe escribir el código correcto AQUÍ.
}
function comprobarEdad(){
    $edad=$_GET=["nota"];
    print('Edad: '+$edad);
    print('Mayoría de edad?: '+esMayorEdad($edad));
    $txtEdad="Usted es menor de edad."
    
    if(esMayorEdad($edad))
        $txtEdad="Usted es mayor de edad."
}
function averiguarCalificacion(){
    $nota=$_GET=["nota"];
    print('Nota: '+$nota);
    print('Calificación: '+obtenerCalificacion($nota));
}
function obtenerCalificacion(nota){
    $calificacion="Incorrecta";
            switch ($nota) {
                case -1:
                    $calificacion="Incorrecta"
                    break;
                case 0:
                    $calificacion="Muy deficiente"
                    break;
                case 1:
                    $calificacion="Muy deficiente"
                    break;
                case 2:
                    $calificacion="Muy deficiente"
                    break;
                case 3:
                    $calificacion="Insuficiente"
                    break;
                case 4:
                    $calificacion="Insuficiente"
                    break;
                case 5:
                    $calificacion="Suficiente"
                    break;
                case 6:
                    $calificacion="Bien"
                    break;
                case 7:
                    $calificacion="Notable"
                    break;
                case 8:
                    $calificacion="Notable"
                    break;
                case 9:
                    $calificacion="Sobresaliente"
                    break;
                case 10:
                    $calificacion="Sobresaliente"
                    break;
                case 11:
                    $calificacion="Incorrecta"
                    break;
                default:
                    $calificacion="Null"
                    break;
            }
            return $calificacion;
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5. Funciones JavaScript</title>
    </head>
    <body>
        <h1>Ejercicio 5. Funciones JavaScript</h1>
        <h2>Comprobar mayoría de edad</h2>
            <p> Introduce tu edad: </p>
            <input type="text" id="edad"/>
            <button type="button" onclick='comprobarEdad()'>Comprobar Edad</button>
            <p id="txtEdad"></p>
        
        <h2>Cálculo de notas</h2>
            <p> Pide una nota (número). Muestra la calificación según la nota:</p>
            <input type="text" id="nota"/>
            <button type="button" onclick='averiguarCalificacion()'>Calificación</button>
            <ul>
                <li>0-3: Muy deficiente.</li>
                <li>3-5: Insuficiente.</li>
                <li>5-6: Suficiente.</li>
                <li>6-7: Bien.</li>
                <li>7-9: Notable.</li>
                <li>9-10: Sobresaliente.</li>
            </ul>
            <p id="txtCalificacion"></p>
        
        <script src="js/ejercicio5.js">
        </script>
    </body>
</html>
<?php

?>
