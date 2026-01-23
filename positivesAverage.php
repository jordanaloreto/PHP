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
    if($numeros > 0){
        return 1;
    }else{
        return 0;
    }
}
function somaPositivo($numeros){
    if($numeros > 0){
        return $numeros;
    }else{
        return 0;
    }
}

$contador = 0;
$soma = 0;

foreach ($dados as $numero) {
    $total = positivo($numero);
    $contador += $total;
    $total2 = somaPositivo($numero);
    $soma += $total2;
}

$media = $soma / $contador;

echo "Total de numeros positivos: $contador"."\n";
echo "Media: $media"."\n";

?>