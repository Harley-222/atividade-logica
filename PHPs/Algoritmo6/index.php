<?php
$nota1 = 7;
$nota2 =2;

$md = ($nota1 + $nota2) / 2;
if ($md >= 9 and $md <= 10){
    echo "Aprovado";
} elseif ($md >=7.5 and $md <= 9){
    echo "Aprovado";
} elseif ($md >=6 and $md <= 7.5){
    echo "Aprovado";
} elseif ($md >=4 and $md <= 6){
    echo "Reprovado";
} elseif ($md >=0 and $md <= 4){
    echo "Reprovado";
}





?>