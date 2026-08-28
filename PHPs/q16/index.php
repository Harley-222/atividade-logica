<?php
$forc = 1;
$int = 0;
$agilidade = 1;

if ($forc >  $int and $forc > $agilidade){
    echo "guerreiro";
}elseif ($int >  $forc and $int > $agilidade){
    echo "mago";
}elseif ($agilidade >  $int and $agilidade > $forc){
    echo "arqueiro";
}else{
    echo "classe híbrido";
}

?>