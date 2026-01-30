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
$n = lerNumero('Repeticoes? ');

for($i = 0; $i < $n; $i++){
    $x = lerNumero('X? ');
    $y = lerNumero('Y? ');
    if($y == 0){
        echo "Divisao Impossivel\n";
    }else{
        $r =$x / $y;
        echo "$r\n";
    }
}

?>