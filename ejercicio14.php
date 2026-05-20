<?php
$metros = $_POST['metros'];
$centimetros = $metros * 100;

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado de la Conversión</h1>";
echo "Cantidad en metros: " . $metros . " m<br><br>";

echo "<b>El equivalente es: </b>" . $centimetros . " cm";
echo "<br><br>";
echo "<hr>";

echo "<a href='ejercicio14.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.php'>Regresar al menú principal</a>";

echo "</body>";
?>