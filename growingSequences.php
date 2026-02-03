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
for($i = 1; $i <= $repeticoes; $i++){
    echo "$i\n";
}
?>
