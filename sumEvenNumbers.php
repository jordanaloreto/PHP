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

        echo "Digite apenas numeros inteiros.\n";
    }
}
$x = lerNumero('X? ');
while($x != 0){
    $sumEven = 0;
    $contador = 0;

    while($contador < 5){
        if($x % 2 ==0){
            $sumEven = $sumEven + $x;
            $contador++;
            
        }
        $x++;
    }
    echo "$sumEven\n";
    $x = lerNumero('X? ');

}
?>