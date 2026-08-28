<?php
$lado1 = 1;
$lado2 = 2;
$lado3 = 3;
if (($lado1 + $lado2)> $lado3 and ($lado2 + $lado3)> $lado1 (($lado3 + $lado1)> $lado2 )){
    echo "é um triângulo!";
    if ($lado1 == $lado2 and $lado2 == $lado3){
        echo "é um triângulo equilátero!";
    } elseif ($lado1 != $lado2 and $lado1 != $lado3 and $lado3 != $lado2){
        echo "é um triângulo escaleno!";
    } else {
        echo "é um triângulo isóceles!";
    }
} else {
    echo "não é um triângulo!";
}








?>