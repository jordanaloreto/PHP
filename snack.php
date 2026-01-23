<?php
function lerCodigoProduto($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Digite o código do produto.\n";
    }
}
function lerUnidadeProduto($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Digite quantas unidades do produto comprou.\n";
    }
}
function lerPrecoUnidade($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float) $valor;
        }

        echo "Digite o preço da unidade do produto.\n";
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
    $codigo = lerCodigoProduto("Código: ");

    if ($codigo === null) {
        break;
    }

    $nome = lerNome("Nome: ");

    if ($nome === null) {
        echo "Nome não pode ser vazio.\n";
        continue;
    }
    $unidade = lerUnidadeProduto("Unidades: ");

    if ($unidade === null) {
        echo "Unidade não pode ser vazio.\n";
        continue;
    }

    $preco = lerPrecoUnidade("Preco da Unidade: ");

    if ($preco === null) {
        echo "Preço não pode ser vazio.\n";
        continue;
    }

    $dados[] = [
        'codigo' => $codigo,
        'nome' => $nome,
        'unidade' => $unidade,
        'preco' => $preco
    ];
}

function total($unidade, $preco){
    return $unidade * $preco;
}

$totalGeral = 0;

foreach ($dados as $produto) {
    $totalPorProduto = total($produto['unidade'], $produto['preco']);
    $totalGeral += $totalPorProduto;
}

echo "Total a pagar: R$ " . number_format($totalGeral, 2, ',', '.') . "\n";


?>
