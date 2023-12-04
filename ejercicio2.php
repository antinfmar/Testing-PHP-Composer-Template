<!-- Antonio Infantes Marin -->
<html lang="es">
    <head>
        <title>Ejercicio 2. Comprobar edad</title>
    </head>
    <body>
        <h3>Cuantos años tienes¿?</h3>
        <form name="form" action="" method="get">
            <input type="text" name="edad" id="edad" value="Edad...">
        </form>
    </body>
</html>
<?php 
$edad=$_GET['edad'];
if (isNumeric($numero)) {
    print("Es un numero");
}    
if ($edad<18) {
    print("Usted no tiene edad para conducir");
} else {
    print("Usted ya es mayor de edad; por tanto, ya podría conducir");
}
?>