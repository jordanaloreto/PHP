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

        echo "Apenas numeros\n";
    }
}

$repeticoes = lerNumero('N1? ');
$contador = 1;
for($i = 0; $i < $repeticoes; $i++){
    echo $contador . " ";
    $contador++;

    echo $contador . " ";
    $contador++;

    echo $contador . " PUM\n";
    $contador++;
}
?>
