<?php
$senha = 1234;
$senhauser = readline("Digite a senha: ");

do {
    echo "senha incorreta\n";
    $senhauser = readline("Digite a senha: ");
} while ($senhauser != $senha);

echo "senha correta"
?>