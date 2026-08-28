<?php
$valor_da_hora = 8;
$horas= 48;
$salario = $valor_da_hora * $horas;

if ($horas > 40 and $horas <= 60){
    $salario += ($salario / 100) * 50;
    echo "Seu salário é:R$$salario";
} elseif ($horas == 40){
    echo "Seu salário é:R$$salario";

}elseif ($horas > 60){
    $salario += ($salario / 100) * 100;
    echo "Seu salário é:R$$salario";
}
?>