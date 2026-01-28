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
$finish = 10;

$N = lerNumero('N? ');

for($i = $start; $i <= $finish; $i++){
    $resultado = $i * $N;
    echo "$i x $N = $resultado"."\n";
}

?>