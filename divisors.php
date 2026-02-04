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

        echo "Digite um número.\n";
    }
}

$finish = lerNumero('N? ');
$r = 0;

for($i = 1; $i <= $finish; $i++){
    if($finish % $i == 0){
        echo "$i\n";
    }
}

?>