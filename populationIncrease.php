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
$casos = lerNumero('Casos? ');
for($i = 0; $i < $casos; $i++){
    $pa = lerNumero('Populacao A?');
    $pb = lerNumero('Populacao B?');
    $g1 = lerNumero('G1?');
    $g2 = lerNumero('G2?');

    $anos = 0;

    while ($pa <= $pb) {
        $pa += (int)($pa * ($g1 / 100));
        $pb += (int)($pb * ($g2 / 100));
        $anos++;

        if ($anos > 100) {
            echo "Mais de 1 seculo.\n";
            break;
        }else {
            echo $anos . " anos.\n";
        }
    }
}
?>