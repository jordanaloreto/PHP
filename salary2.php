<?php
function lerSalario($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float) $valor;
        }

        echo "Digite seu salário.\n";
    }
}
function lerBonus($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float) $valor;
        }

        echo "Digite o quanto vendeu.\n";
    }
}

function lerNome($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        return $valor; 
    }
}

$dados = [];

while (true) {
    $nome = lerNome("Nome (ENTER para finalizar): ");

    if ($nome === null) {
        break;
    }

    $salario = lerSalario("Salário: ");

    if ($salario === null) {
        echo "Salário não pode ser vazio.\n";
        continue;
    }

    $vendas = lerBonus("Total de vendas: ");

    if ($vendas === null) {
        echo "Vendas não pode ser vazio.\n";
        continue;
    }

    $dados[] = [
        'nome' => $nome,
        'salario' => $salario,
        'vendas' => $vendas
    ];
}

function total($salario, $vendas){
    $bonus = $vendas * 0.15;
    return $salario + $bonus;
}
// 15% das vendas
foreach ($dados as $pessoa) {
    $total = total($pessoa['salario'], $pessoa['vendas']);

    echo $pessoa['nome'] . ": R$ " . number_format($total, 2, ',', '.') . "\n";
}

?>
