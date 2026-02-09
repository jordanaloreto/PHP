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
    $count = 0;

    for($j = 1; $j <= $x; $j++){
        if($x % $j == 0){
            $count++;
        }
    }
    if($count == 2){
        echo "$x eh primo\n";
    }else{
        echo "$x nao eh primo\n";
    }
}
?>