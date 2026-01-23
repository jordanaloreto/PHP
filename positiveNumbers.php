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

$dados = [];

while (true) {
    $numeros = lerNumero("Numeros: ");

    if ($numeros === null) {
        break;
    }

    $dados[] = $numeros;
}

function positivo($numeros){
    if($numeros >= 0){
        return 1;
    }else{
        return 0;
    }
}

$contador = 0;

foreach ($dados as $numero) {
    $total = positivo($numero);
    $contador += $total;
}

echo "Total de numeros positivos: $contador"."\n";

?>