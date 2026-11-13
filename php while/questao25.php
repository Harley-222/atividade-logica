<?php 
$media = 0;
$maior_temp = 0;
for($i = 1; $i <= 7; $i++){
    $temperatura = (float)readline("digite a temperatura do dia $i: ");
    $media += $temperatura;
    $media /= 7;
} echo("a média da temperatura semanal é: $media\n");
 echo("a maior temperatura da semana é: $maior_temp");
?>