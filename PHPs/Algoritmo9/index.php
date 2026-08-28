<?php

$tel_vitima = false;
$esteve_local = false;
$mora_perto = false;
$devia_vitima = false;
$trabalhou_vitima = false;

$contagem = 0;

if ($tel_vitima == true){
    $contagem++;

    echo"Telefonou para vitima";
} else{
    echo"Não telefonou para vitima";
}

if ($esteve_local == true){
    $contagem++;

    echo "\nEsteve no local";
} else{
    echo "\nNão esteve no local";
}

if ($mora_perto == true){
    $contagem++;

    echo "\nMora perto da vitima";
} else{
    echo "\nNão mora perto da vitima";
}

if ($devia_vitima == true){
    $contagem++;

    echo "\nDevia para a vitima";
} else{
    echo "\nNão devia para a vitima";
}

if ($trabalhou_vitima == true){
    $contagem++;

    echo "\nJá trabalhou para a vitima";
} else{
    echo "\nNão trabalhou para a vitima";
}

if ($contagem == 2 ){
    echo "\nsupeita";
} elseif ($contagem == 3 or $contagem == 4){
    echo "\nCúmplice";
} elseif ($contagem == 5){
    echo "\nAssasino";
} elseif ($contagem == 0){
    echo "\nInocente";
}
    
?>