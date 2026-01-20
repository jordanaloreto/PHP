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

        echo "Digite apenas numeros inteiros e decimais.\n";
    }
}

function banknotes($A){
    // agora $A está em centavos
    $notas = [10000, 5000, 2000, 1000, 500, 200];
    $moedas = [100, 50, 25, 10, 5, 1];

    echo ($A / 100) . "\n";

    foreach ($notas as $nota) {
        $quantidade = intdiv($A, $nota);
        echo "Notas: $quantidade nota(s) de R$ " . ($nota / 100) . "\n";
        $A %= $nota;
    }

    foreach ($moedas as $moeda) {
        $quantidade = intdiv($A, $moeda);
        echo "Moedas: $quantidade moeda(s) de R$ " . ($moeda / 100) . "\n";
        $A %= $moeda;
    }
}
// Basicamente vc tem que pegar o valor e transfromar pra unidade de moedas, centavos pra poder realizar os cálculos

$A = lerNumero("");
$A = (int) round($A * 100);

banknotes($A);

?>