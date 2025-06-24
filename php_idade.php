<?php
define("ANO_ATUAL", 2025);

$ano_nascimento = $_POST['ano'];
$idade = ANO_ATUAL - $ano_nascimento;
$dias_vividos = $idade * 365;
$idade_2050 = 2050 - $ano_nascimento;

echo "Você tem $idade anos.<br>";
echo "Você viveu aproximadamente $dias_vividos dias.<br>";
echo "Em 2050 você terá $idade_2050 anos.";
?>