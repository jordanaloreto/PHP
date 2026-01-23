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
$start = lerNumero('A? ');
$finish = lerNumero('B? ');

// garante ordem correta
if ($start > $finish) {
    $tmp = $start;
    $start = $finish;
    $finish = $tmp;
}

$soma = 0;

for($i = $start + 1; $i < $finish; $i++){
    if($i % 2 !== 0){
        $soma += $i;
    }
}

echo "Soma dos impares: $soma\n";


?>