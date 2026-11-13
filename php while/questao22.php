<?php 
$consumo_total = 0;
for($i = 1; $i <= 7; $i++){
    $consumo_de_agua = (float)readline("digite o consumo do dia $i: ");
    $consumo_total += $consumo_de_agua;
} echo("o consumo total da semana é: $consumo_total");
?>