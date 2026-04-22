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

        echo "Digite um número ou ENTER para finalizar.\n";
    }
}

$dados = [];

while (true) {
    $slugs = lerNumero("Slugs (ENTER para finalizar): ");

    if ($slugs === null) {
        break;
    }
    for($i = 0; $i < $slugs; $i++){
        $speeds = lerNumero('Speeds? ');
        $dados[] = $speeds;
    }
}

$soma = 0;

foreach ($dados as $item) {
    $soma += $item;
}

$media = $soma / count($dados);

if ($media < 10) {
    echo "Level 1\n";
} elseif ($media >= 10 && $media < 20) {
    echo "Level 2\n";
} else {
    echo "Level 3\n";
    
}

?>
