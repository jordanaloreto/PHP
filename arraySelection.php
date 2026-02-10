<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float) $valor;
        }

        echo "Digite apenas numeros.\n";
    }
}

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[$i] = lerNumero('Digite 10 numeros: ');

    if ($array[$i] <= 10) {
        echo "array[$i] = {$array[$i]}\n";
    }
}
// $i já é o índice
// $array[$i] é o valor


?>