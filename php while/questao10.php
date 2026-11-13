<?php
$codigo = 50700;
$codigouser = readline("digite a senha: ");

while ($codigouser != $codigo){
if ($codigouser < $codigo){
 echo "o codigo correto tem um valor maior do que o digitado";
} 
else{
 echo "o codigo correto tem um valor menor do que o digitado";
}
}
$senhauser = readline("Digite a senha correta: ");
echo "Parabéns! Você acertou a senha.\n";
?>