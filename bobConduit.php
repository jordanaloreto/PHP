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
$T = lerNumero('T? ');
$total = 0;
for($i = 0; $i < $T; $i++){
    $R1 = lerNumero('R1? ');
    $R2 = lerNumero('R2? ');
    
    $total = $R1 + $R2;

    echo "$total\n";
}

?>