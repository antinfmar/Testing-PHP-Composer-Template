<!-- Antonio Infantes Marín -->
<?php
$nota=$_GET=["nota"];
$calificacion="";
switch ($nota) {
    case '0':
        $calificacion="Muy deficiente"
        break;
    case '1':
        $calificacion="Muy deficiente"
        break;
    case '2':
        $calificacion="Muy deficiente"
        break;
    case '3':
        $calificacion="Insuficiente"
        break;
    case '4':
        $calificacion="Insuficiente"
        break;
    case '5':
        $calificacion="Suficiente"
        break;
    case '6':
        $calificacion="Bien"
        break;
    case '7':
        $calificacion="Notable"
        break;
    case '8':
        $calificacion="Notable"
        break;
    case '9':
        $calificacion="Sobresaliente"
        break;
    case '10':
        $calificacion="Sobresaliente"
        break;    
    default:        
        break;
print("Tienes una nota: ".$nota." lo cual la calificadón es ".$calificacion);
}
?>
<html lang="es">
    <head>
        <title>Ejercicio 4. Calcular nota</title>
    </head>
    <body>
        <h1>Cálculo de notas</h1>
            <p> Pide una nota (número). Muestra la calificación según la nota:</p>
            <ul>
                <li>0-3: Muy deficiente.</li>
                <li>3-5: Insuficiente.</li>
                <li>5-6: Suficiente.</li>
                <li>6-7: Bien.</li>
                <li>7-9: Notable.</li>
                <li>9-10: Sobresaliente.</li>
            </ul>
            <p>Repite el ejercicio anterior utilizando la estructura <code>switch</code></p>
        <form action="" method="get">
            <input type="text" name="nota" id="nota" value="Nota...">
        </form>    
    </body>
</html>
