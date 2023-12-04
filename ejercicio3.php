<!-- Antonio Infantes Marín-->
<?php
$nota=$_GET['nota'];
$calificacion="";
if ((n>=0)&&(n<3)){
    $calificacion='Muy deficiente';
} else if ((n>=3)&&(n<5)) {
    $calificacion='Insuficiente';
} else if ((n>=5)&&(n<6)) {
    $calificacion='Suficiente';
} else if ((n>=6)&&(n<7)) {
    $calificacion='Bien';
} else if ((n>=7)&&(n<8)) {
    $calificacion='Notable';
} else if ((n>=8)&&(n<9)) {
    $calificacion='Notable Alto';
} else if ((n>=9)&&(n<10)) {
    $calificacion='Sobresaliente';
} else if (n==10) {
    $calificacion='Matricula';
} else {
    $calificacion='Incorrecta';
}
print($calificacion);
?>
<html lang="es">
    <head>
        <title>Ejercicio 3. Calcular nota</title>
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
