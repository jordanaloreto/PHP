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
$repeticoes = lerNumero('N? ');
for($i = 0; $i < $repeticoes; $i++){
    $x = lerNumero('X? ');
    $y = lerNumero('Y? ');
    $sumOdds = 0;
    $contador = 0;
    for($j = $x; $contador < $y; $j++){
        if($j % 2 !== 0){
            $sumOdds += $j;
            $contador++;
        }
    }
    echo "$sumOdds\n";
}
?>