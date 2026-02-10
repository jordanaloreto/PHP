<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Apenas numeros\n";
    }
}

$repeticoes = lerNumero("Test Cases? ");

for ($i = 0; $i < $repeticoes; $i++) {

    $n = lerNumero("");

    if ($n == 0) {
        $resultado = 0;
    } elseif ($n == 1) {
        $resultado = 1;
    } else {
        $primeiro = 0;
        $segundo = 1;

        for ($j = 2; $j <= $n; $j++) {
            $novo = $primeiro + $segundo;
            $primeiro = $segundo;
            $segundo = $novo;
        }

        $resultado = $segundo;
    }

    echo "Fib($n) = $resultado\n";
}
?>
