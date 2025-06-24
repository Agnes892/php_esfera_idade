<?php
define("PI", 3.141592);

$raio = 5; // valor de exemplo

$area = 4 * PI * pow($raio, 2);
$volume = (4/3) * PI * pow($raio, 3);

echo "Raio da esfera: $raio <br>";
echo "Área da esfera: " . round($area, 2) . "<br>";
echo "Volume da esfera: " . round($volume, 2);
?>