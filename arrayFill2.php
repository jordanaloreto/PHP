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


$n = lerNumero('Digite um numero: ');
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = $i % $n;
    echo "array[$i] = {$array[$i]}\n";
}

// $i já é o índice
// $array[$i] é o valor


?>