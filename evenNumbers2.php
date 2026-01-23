<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (filter_var($valor, FILTER_VALIDATE_FLOAT) !== false){
            return (float) $valor;
        }

        echo "Digite apenas numeros.\n";
    }
}

$dados = [];

while (true) {
    $numeros = lerNumero("Numeros: ");

    if ($numeros === null) {
        break;
    }

    $dados[] = $numeros;
}

function par($numeros){
    if($numeros % 2 == 0){
        return 1;
    }else{
        return 0;
    }
}
function impar($numeros){
    if($numeros % 2 !== 0){
        return 1;
    }else{
        return 0;
    }
}
function positivo($numeros){
    if($numeros > 0){
        return 1;
    }else{
        return 0;
    }
}
function negativo($numeros){
    if($numeros < 0){
        return 1;
    }else{
        return 0;
    }
}

$contadorPar = 0;
$contadorImpar = 0;
$contadorPosit = 0;
$contadorNeg = 0;

foreach ($dados as $numero) {
    $totalPar = par($numero);
    $contadorPar += $totalPar;
    $totalImpar = impar($numero);
    $contadorImpar += $totalImpar;
    $totalPos = positivo($numero);
    $contadorPosit += $totalPos;
    $totalNeg = negativo($numero);
    $contadorNeg += $totalNeg;
}

echo "Total de numeros pares: $contadorPar"."\n";
echo "Total de numeros impares: $contadorImpar"."\n";
echo "Total de numeros positivos: $contadorPosit"."\n";
echo "Total de numeros negativos: $contadorNeg"."\n";

?>
<!-- essa e a solucao mais eficiente -->

// function lerNumero($mensagem){
//     while (true){
//         echo $mensagem;
//         $valor = trim(fgets(STDIN));

//         if ($valor === '') {
//             return null;2020
//         }

//         if (filter_var($valor, FILTER_VALIDATE_INT) !== false){
//             return (int) $valor;
//         }

//         echo "Digite apenas numeros inteiros.\n";
//     }
// }

// $contadorPar = 0;
// $contadorImpar = 0;
// $contadorPositivo = 0;
// $contadorNegativo = 0;

// while (true) {
//     $numero = lerNumero("Numero: ");

//     if ($numero === null) {
//         break;
//     }

//     // par ou ímpar
//     if ($numero % 2 === 0) {
//         $contadorPar++;
//     } else {
//         $contadorImpar++;
//     }

//     // positivo ou negativo
//     if ($numero > 0) {
//         $contadorPositivo++;
//     } elseif ($numero < 0) {
//         $contadorNegativo++;
//     }
// }

// echo "Total de numeros pares: $contadorPar\n";
// echo "Total de numeros impares: $contadorImpar\n";
// echo "Total de numeros positivos: $contadorPositivo\n";
// echo "Total de numeros negativos: $contadorNegativo\n";
