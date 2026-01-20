<?php
$pi = 3.14159;

function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if(filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Apenas inteiros.\n";
    }
}

function volume($pi, $R){
    return (4/3) * $pi * pow($R, 3);
}

$R = lerNumero("R? ");

$resultado = volume($pi, $R);

echo "Volume = $resultado";

?>
