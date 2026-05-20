<?php
$num = $_POST['numero'];
$resultado = "";

if ($num % 2 == 0) {
    $resultado = "El numero " . $num . " es PAR.";
} else {
    $resultado = "El numero " . $num . " es IMPAR.";
}

echo "<body bgcolor='#cca9a9' text='#000000'>";

echo "<h1>Resultado del Análisis de número</h1>";
echo "Número evaluado: " . $num;
echo "<br><br>";

echo "<b>Respuesta: </b>" . $resultado;
echo "<br><br>";
echo "<hr>";

echo "<a href='ejercicio9.html'>Regresar al formulario</a>";
echo "<br><br>";
echo "<a href='index.php'>Regresar al menú principal</a>";

?>