<?php 
$num = readline("digite um número: ");
$fatorial = 1;
for($i = 1; $i <= $num; $i ++){
     $fatorial *= $i;
     echo("o fatorial de $num! é: $fatorial \n");
}
?>