<?php
$n1 = 170;
$n2 = 2;
$n3 = 32312;

$prim = 0;
$seg = 0;
$terc = 0;

if ($n1 > $n2 && $n1 > $n3){
    $prim = $n1;
} elseif ($n2 > $n1 && $n2 > $n3){
    $prim = $n2;
} else{
    $prim = $n3;
}

if ($n1 < $prim && $n1 < $n2 && $n1 < $n3){
    $terc = $n1;
} elseif ($n2 < $prim && $n2 < $n1 && $n2 < $n3){
    $terc = $n2;
} elseif ($n3 < $prim && $n3 < $n1 && $n3 < $n2){
    $terc = $n3;
}

if ($terc < $n1 && $n1 < $prim){
    $seg = $n1;
} elseif ($terc < $n2 && $n2 < $prim){
    $seg = $n2;
} elseif ($terc < $n3 && $n3 < $prim){
    $seg = $n3;
}
 
echo "A ordem crescente dos números $n1, $n2 e $n3 é: $terc, $seg, $prim";
?>