<?php
$pi = 3.14159;

echo "R: ";
$R = trim(fgets(STDIN));

function area($pi, $R){
    return $pi * ($R * $R);
}

$resultado = area($pi, $R);

echo "Area = $resultado";


?>
