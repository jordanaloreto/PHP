<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false && $valor >= 0 && $valor <= 10){
            return (float) $valor;
        }

        echo "Digite um número entre 0 e 10 ou ENTER para finalizar.\n";
    }
}

$dados = [];

while (true) {
    $nota = lerNumero("Nota (ENTER para finalizar): ");

    if ($nota === null) {
        break;
    }

    $peso = lerNumero("Peso: ");

    if ($peso === null) {
        echo "Peso não pode ser vazio.\n";
        continue;
    }

    $dados[] = [
        'nota' => $nota,
        'peso' => $peso
    ];
}

$somaPonderada = 0;
$somaPesos = 0;

foreach ($dados as $item) {
    $somaPonderada += $item['nota'] * $item['peso'];
    $somaPesos += $item['peso'];
}

$media = $somaPonderada / $somaPesos;

echo "Média: " . number_format($media, 2) . "\n";

if ($media >= 7) {
    echo "Aprovado\n";
} elseif ($media < 5) {
    echo "Reprovado\n";
} else {
    echo "Aluno em exame\n";
    $notaExame = lerNumero("Nota do exame: ");
    $mediaFinal = ($media + $notaExame) / 2;

    echo "Média Final: " . number_format($mediaFinal, 2) . "\n";

    if ($mediaFinal >= 5) {
        echo "Aprovado\n";
    } else {
        echo "Reprovado\n";
    }
}

// Não existe return fora de uma função, para colocar um return dentro de um if esse if tem de estar dentro de uma function


?>
