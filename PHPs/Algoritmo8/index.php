<?php
$valor = 256;
$valor_calc = $valor;

$nota100_qntd = 0;
$nota50_qntd = 0;
$nota5_qntd = 0;
$nota1_qntd = 0;

while ($valor_calc >= 100) {
    $nota100_qntd++;
    $valor_calc -= 100;
}

while ($valor_calc >= 50) {
    $nota50_qntd++;
    $valor_calc -= 50;
}

while ($valor_calc >= 5) {
    $nota5_qntd++;
    $valor_calc -= 5;
}

while ($valor_calc >= 1) {
    $nota1_qntd++;
    $valor_calc -= 1;
}

echo "\nNotas de 100: $nota100_qntd";
echo "\nNotas de 50: $nota50_qntd";
echo "\nNotas de 5: $nota5_qntd";
echo "\nNotas de 1: $nota1_qntd";
?>