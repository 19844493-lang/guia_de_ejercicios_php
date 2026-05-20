<?php
$base = $_POST['base'];
$altura = $_POST['altura'];
$area = $base * $altura;
echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado del Cálculo</h1>";
echo "Base ingresada: " . $base . " cm<br>";
echo "Altura ingresada: " . $altura . " cm<br><br>";

echo "<b>El área total del rectángulo es: </b>" . $area . " cm²";
echo "<br><br>";
echo "<hr>";

echo "<a href='Ejercicio12.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.php'>Regresar al menú principal</a>";
?>