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

while(true){
    
    $m = lerNumero('M? ');
    $n = lerNumero('N? ');

    if($m <= 0 || $n <= 0){
        break;
    }
    if ($m > $n) {
        $aux = $n;
        $n = $m;
        $m = $aux;
    }
    $sum = 0;
    $atual = $m;

    while ($atual <= $n) {
        echo $atual . " ";
        $sum += $atual;
        $atual++;
    }

    echo "Sum=$sum\n";
}
?>