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

$n = lerNumero('N? ');
$r = 1;
for($i = 1; $i <= $n; $i++){
    $r = $r * $i;
}
echo "$r";
?>
