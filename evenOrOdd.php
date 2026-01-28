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
$numeros = [];

while(true){
    $numero = lerNumero("Digite o N: ");

    if($numero === null){
        break;
    }

    $numeros[] = $numero;
}
foreach($numeros as $n){
    if($n < 0 && $n % 2 == 0){
            echo "Par Negativo"."\n";
        }elseif($n < 0 && $n % 2 !== 0){
            echo "Impar Negativo"."\n";
        }elseif($n > 0 && $n % 2 == 0){
            echo "Par Positivo"."\n";
        }elseif($n > 0 && $n % 2 !== 0){
            echo "Impar Positivo"."\n";
        }elseif($n == 0){
            echo "Null"."\n";
        }
}

?>