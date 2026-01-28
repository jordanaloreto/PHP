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

$numeros = lerNumero('N? ');

for($i = 0; $i < $numeros; $i++){
    $n1 = lerNumero('N1? ');
    $n2 = lerNumero('N2? ');
    $n3 = lerNumero('N3? ');
    $r = (($n1 * 2) + ($n2 * 3) + ($n3 * 5)) / 10;
    echo "$r"."\n";
}

?>