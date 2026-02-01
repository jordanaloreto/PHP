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

        echo "Digite apenas numeros.\n";
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
    $tipo = lerNome("Nome (ENTER para finalizar): ");

    if ($tipo === null) {
        break;
    }

    $pessoas = lerNumero("Quantas pessoas escolheram ess tipo: ");

    if ($pessoas === null) {
        echo "Nao pode ser vazio.\n";
        continue;
    }

    $dados[] = [
        'tipo' => $tipo,
        'pessoas' => $pessoas
    ];
}
echo "Muito Obrigado!\n";

foreach ($dados as $item) {
    echo $item['tipo'], $item['pessoas'] ."\n";
}

?>
