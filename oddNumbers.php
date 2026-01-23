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
$start = 0;
$finish = lerNumero('B? ');

echo "Numeros impares entre $start e $finish". "\n";

for($i = $start; $i <= $finish; $i++){
    if($i % 2 !== 0){
        echo $i." ";
    }
}

?>