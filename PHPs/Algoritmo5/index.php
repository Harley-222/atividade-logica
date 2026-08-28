<?php
$valor_da_hora=44;
$hora=200;

$salario = $valor_da_hora * $hora;
$salario_alterado = 0;
$valor_diminuido = 0;

$salario -= ($salario / 100) * 11;

if ($salario <= 900){
    echo "Valor bruto: $$salario\nDescontos: $0\nSalário Liquido: $$salario";
} elseif ($salario <= 1500){
    $valor_diminuido = ($salario / 100 * 5);
    $salario_alterado = $salario - $valor_diminuido;
    $salario_alterado -= ($salario_alterado / 100) * 3;

    echo "Valor bruto: $$salario\nDescontos: $$valor_diminuido\nSalário Liquido: $$salario_alterado";
} elseif ($salario <= 2500){
    $valor_diminuido = ($salario / 100 * 10);
    $salario_alterado = $salario - $valor_diminuido;
    $salario_alterado -= ($salario_alterado / 100) * 3;

    echo "Valor bruto: $$salario\nDescontos: $$valor_diminuido\nSalário Liquido: $$salario_alterado";
} elseif ($salario > 2500){
    $valor_diminuido = ($salario / 100 * 20);
    $salario_alterado = $salario - $valor_diminuido;
    $salario_alterado -= ($salario_alterado / 100) * 3;

    echo "Valor bruto: $$salario\nDescontos: $$valor_diminuido\nSalário Liquido: $$salario_alterado";
}
    
?>