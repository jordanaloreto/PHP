<?php
$s = 0;
$numerador = 1;
$denominador = 1;
while($numerador <= 39){
    $s = $s + ($numerador / $denominador);

    $numerador += 2;
    $denominador *= 2;
}
echo "$s";
?>