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

        echo "Digite apenas numeros.\n";
    }
}

$repeticoes = lerNumero('Repetiçoes? ');

for($i = 0; $i < $repeticoes; $i++){
    $x = lerNumero('X? ');
    $y = lerNumero('Y? ');
    // caso Y seja maior que X
    if ($x > $y) {
        $aux = $y;
        $y = $x;
        $x = $aux;
    }
    $sumOdds = 0;
    for($j = $x + 1; $j <= $y - 1; $j++){
        if($j % 2 !==0){
            $sumOdds = $sumOdds + $j;  
        }
    }
    echo "$x, $y = $sumOdds"."\n";
}
?>