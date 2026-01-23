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
function lerAumento($mensagem){
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

    $aumento = lerAumento("Aumento: ");

    if ($aumento === null) {
        echo "Aumento não pode ser vazio.\n";
        continue;
    }

    $dados[] = [
        'nome' => $nome,
        'salario' => $salario,
        'aumento' => $aumento
    ];
}

function total($salario, $aumento){
    $salarioFinal = $salario + $aumento;
    $porcentagem = ($aumento / $salario) * 100;
    return [$salarioFinal, $porcentagem];
}

foreach ($dados as $pessoa) {

    [$salarioFinal, $porcentagem] = total(
        $pessoa['salario'],
        $pessoa['aumento']
    );

    echo "Nome: {$pessoa['nome']}\n";
    echo "Salário inicial: {$pessoa['salario']}\n";
    echo "Aumento: {$pessoa['aumento']}\n";
    echo "Salário final: $salarioFinal\n";
    echo "Percentual: " . number_format($porcentagem, 2) . "%\n";
    echo "-----------------------------\n";
}

?>
