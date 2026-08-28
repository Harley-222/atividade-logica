<?php
$tabuleiro = [
    [1, 2, 3],
    [3, 1, 2],
    [2, 3, 0]
];

$linha = 3;
$coluna = 3;
$numero = 1;

if ($numero <1 and $numero >3){;
    echo "o numero tem que ser 1, 2 ou 3";
}

if ($numero >=1 and $numero <= 3){;
    echo "perfeito agora qual numero vc escolhe?";
}

elseif ($numero = 1)
    echo "correto!";
elseif ($numero >=2 and $numero <= 3)
    echo "nao esta correto";
?>