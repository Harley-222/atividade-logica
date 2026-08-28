<?php
$salario = 500;
$salario_alterado = 0;
$valor_aumento = 0;

 if ($salario == 280){
    $valor_aumento = ($salario / 100) * 20;
    $salario_alterado = $salario + $valor_aumento;

    echo "Foi aplicado 20% à $salario.\nValor do acréscimo foi de $valor_aumento.\nSeu salário atual é: $salario_alterado";
} elseif (280 <= $salario and $salario <= 700){
    $valor_aumento = ($salario / 100) * 15;
    $salario_alterado = $salario + $valor_aumento;

    echo "Foi aplicado 15% à $salario.\nValor do acréscimo foi de $valor_aumento.\nSeu salário atual é: $salario_alterado";
} elseif (700 <= $salario and $salario <= 1500){
    $valor_aumento = ($salario / 100) * 10;
    $salario_alterado = $salario + $valor_aumento;

    echo "Foi aplicado 10% à $salario.\nValor do acréscimo foi de $valor_aumento.\nSeu salário atual é: $salario_alterado";
} elseif ($salario > 1500){
    $valor_aumento = ($salario / 100) * 5;
    $salario_alterado = $salario + $valor_aumento;

    echo "Foi aplicado 5% à $salario.\nValor do acréscimo foi de $valor_aumento.\nSeu salário atual é: $salario_alterado";
}
?>