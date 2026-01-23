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
function gameTime($inicio, $fim, $inicioMin, $fimMin){
    if ($fim > $inicio) {
    $duracao = ($fim - $inicio) + ($fimMin - $inicioMin);
    } else {
        $duracao = 24 - ($inicio + $fim) + ($inicioMin + $fimMin);
    }

    echo "O JOGO DUROU $duracao HORA(S)\n";
}
// Entrada
$inicio = lerNumero("inicio? ");
$fim = lerNumero("fim? ");
$inicioMin = lerNumero("inicioMin? ");
$fimMin = lerNumero("fimMin? ");

gameTime($inicio, $fim, $inicioMin, $fimMin);
?>