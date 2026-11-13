<?php 
$aluno = 1;
$somaNotas = 0;
for ($aluno; $aluno <= 5; $aluno++){ 
     $nota = readline("digite a nota do aluno $aluno: ");
     $somaNotas += $nota ;
} 
$med = ($somaNotas / 5);
echo "A média da turma é: $med! \n";
?>