<?php
function lerDistancia($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if(filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Apenas numeros inteiros.\n";
    }
}
function lerGasolina($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if(filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float) $valor;
        }

        echo "Apenas numeros.\n";
    }
}

function consumo($X, $Y){
    return $X / $Y;
}

$X = lerDistancia("Distância? ");
$Y = lerGasolina("Gasolina? ");

$resultado = consumo($X, $Y);

echo number_format($resultado, 2, ',', '.') . " Km/l";

?>