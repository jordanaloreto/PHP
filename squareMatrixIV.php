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

        echo "Digite apenas numeros.\n";
    }
}
$matriz = 0;
while(true){
    $n = lerNumero('N? ');
    if($n == 0){
        break;
    }
    for($i = 0; $i < $n; $i++){
        for($j = 0; $j < $n; $j++){
            $matriz = pow(2, $i + $j);
            echo "$matriz";
        }
        echo "\n";
    }
}

?>