<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_INT) !== false && $valor >= 0 && $valor <= 10){
            return (int) $valor;
        }

        echo "Nota Inválida.(N'ao pode negativo e tem de ser entre 0 a 10)\n";
    }
}

$dados = [];

while (true) {
    $nota = lerNumero("Nota (ENTER para finalizar): ");

    if ($nota === null) {
        break;
    }
    $dados[] = $nota;
}
$sumNotas = 0;
$sumQtdNotas = 0;
foreach($dados as $item){
    $sumNotas += $item;
    $sumQtdNotas++;
}

$media = $sumNotas / $sumQtdNotas;

echo "media = $media\n";



?>
