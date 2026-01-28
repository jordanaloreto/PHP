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
$start = 1;
$finish = 100;

$N = lerNumero('N? ');

for($i = $start; $i <= $finish; $i++){
    if($i % $N == 2){
        echo "$i"."\n";
    }
}

?>