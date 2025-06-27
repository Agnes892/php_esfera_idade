<?php
const anoAtual = 2025;

if (isset($_POST["ano"])) {
    $anoNascimento = $_POST["ano"];
    $idadeAnos = anoAtual - $anoNascimento;
    $diasVividos = $idadeAnos * 365;
    $idade2050 = 2050 - $anoNascimento;

    echo "<h2>Resultados:</h2>";
    echo "Idade atual: " .$idadeAnos. " anos<br>";
    echo "Dias vividos : " .$diasVividos. " dias<br>";
    echo "Idade em 2050: " .$idade2050. " anos<br>";
}

else{
    echo "Erro";
}
?>
