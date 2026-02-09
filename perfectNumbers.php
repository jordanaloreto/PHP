<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Digite apenas numeros inteiros.\n";
    }
}
$n = lerNumero('N? ');

for($i = 0; $i < $n; $i++){
    $x = lerNumero('X?');
    $sum = 0;

    for($j = 1; $j < $x; $j++){
        if($x % $j == 0){
            $sum = $sum + $j;
        }
    }
    if($sum == $x){
        echo "$x eh perfeito\n";
    }else{
        echo "$x nao eh perfeito\n";
    }
}
?>