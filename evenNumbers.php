<?php
$start = 0;
$finish = 101;

echo "Numeros pares entre $start e $finish". "\n";

for($i = $start; $i <= $finish; $i++){
    if($i % 2 == 0){
        echo $i." ";
    }
}

?>