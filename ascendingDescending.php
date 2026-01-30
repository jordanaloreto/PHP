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
    
    $x = lerNumero('X? ');
    $y = lerNumero('Y? ');

    if($x == $y){
        break;
    }
    if ($x < $y) {
        echo "Crescente\n";
    } else {
        echo "Decrescente\n";
    }

}
?>