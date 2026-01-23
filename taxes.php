<?php

function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float)$valor;
        }

        echo "Digite um número válido.\n";
    }
}

$salario = lerNumero("Salario? ");

$imposto = 0.0;

// faixas de imposto
$faixas = [
    [2000.00, 0.00],
    [3000.00, 0.08],
    [4500.00, 0.18],
    [INF,     0.28]
];
// INF é uma constante interna do PHP que representa infinito positivo.

$anterior = 0.0;

foreach ($faixas as [$limite, $aliquota]) {

    if ($salario > $limite) {
        $valorFaixa = $limite - $anterior;
    } else {
        $valorFaixa = $salario - $anterior;
    }

    if ($valorFaixa > 0) {
        $imposto += $valorFaixa * $aliquota;
    }

    $anterior = $limite;

    if ($salario <= $limite) {
        break;
    }
}

if ($imposto == 0) {
    echo "Isento\n";
} else {
    echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
}
