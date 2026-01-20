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

function distance($x1, $y1, $x2, $y2){
    return sqrt(
        pow($x2 - $x1, 2) +
        pow($y2 - $y1, 2)
    );
}

echo "pw1 = x1, y1\n";
$x1 = lerNumero("x1? ");
$y1 = lerNumero("y1? ");

echo "pw2 = x2, y2\n";
$x2 = lerNumero("x2? ");
$y2 = lerNumero("y2? ");

$resultado = distance($x1, $y1, $x2, $y2);

echo "D = " . number_format($resultado, 4, '.', '') . "\n";

?>