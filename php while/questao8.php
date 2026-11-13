<?php
do{
    echo "1 - Cadastrar aluno\n";
    echo "2 - Consultar aluno\n";
    echo "3 - Excluir aluno\n";
    echo "0 - Sair\n";

  $num = readline("digite um número: ");{

    } if($num == 1){   
        echo "Você escolheu Cadastrar aluno!\n";
    } elseif ($num == 2){
        echo "Você escolheu Consultar aluno!\n";
    } elseif ($num == 3){
        echo "Você escolheu Excluir aluno!\n";
    } else {
        echo "Você escolheu sair!\n";
    }  
    } while ($num != 0)
?>