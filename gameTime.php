<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (is_numeric($valor)){
            return (int)$valor;
        }

        echo "Digite apenas numeros.\n";
    }
}
function gameTime($inicio, $fim){
    if ($fim > $inicio) {
    $duracao = $fim - $inicio;
    } else {
        $duracao = 24 - $inicio + $fim;
    }

    echo "O JOGO DUROU $duracao HORA(S)\n";
}
// Entrada
$inicio = lerNumero("inicio? ");
$fim = lerNumero("fim? ");

gameTime($inicio, $fim);
?>