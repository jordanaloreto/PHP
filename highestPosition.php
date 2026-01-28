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
$numeros = [];
while(true){
    $numero = lerNumero("Digite o N: ");

    if($numero === null){
        break;
    }

    $numeros[] = $numero;
}

$maior = $numeros[0];
$posicao = 1;
//valor e posicao do item no array
foreach($numeros as $indice => $valor){
    if ($valor > $maior) {
        $maior = $valor;
        $posicao = $indice + 1;
    }
}
echo "Maior valor: $maior\n";
echo "Posição: $posicao\n";

?>