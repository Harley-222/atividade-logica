<?php
$num = 1;

while ($num < 31){
    if ($num % 2 == 0) {
        echo "O $num é par\n";

        $num++;
    } else {
        echo "O $num não é par\n";

        $num++;
    }
}

?>