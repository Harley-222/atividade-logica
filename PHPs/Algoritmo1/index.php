<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nota = $_POST['nota'];
    
    echo "<h1> Seu resultado: </h1>";
    echo "<b>Nota</b>: $nota <br>";
    if ($nota >= 95){
        echo "EXCELENTE! 👏";
    } elseif ($nota >= 80 and $nota <= 94){
        echo "Muito bom! 👌";
    } elseif($nota >= 60 and $nota <= 79){
        echo "Legal :)";
    } elseif($nota < 60){
        echo "Tá precisando estudar...";
    }
}
?>