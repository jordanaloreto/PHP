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

        echo "Digite seu valor por hora.\n";
    }
}
function lerHora($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Digite a quantidade de horas trabalhadas.\n";
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

    $valorHora = lerNumero("Valor pela hora: ");

    if ($valorHora === null) {
        echo "Valor Hora não pode ser vazio.\n";
        continue;
    }

    $horas = lerHora("Quantidade de horas trabalhada: ");

    if ($horas === null) {
        echo "Horas não pode ser vazio.\n";
        continue;
    }

    $dados[] = [
        'nome' => $nome,
        'valorHora' => $valorHora,
        'horas' => $horas
    ];
}

function salary($valorHora, $horas){
    return $valorHora * $horas;
}

foreach ($dados as $pessoa) {
    $salario = salary($pessoa['valorHora'], $pessoa['horas']);

    echo $pessoa['nome'] . ": R$ " . number_format($salario, 2, ',', '.') . "\n";
}

?>
