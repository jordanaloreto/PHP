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


$repeticoes = lerNumero('N: ');
$x = [];
for($i = 0; $i < $repeticoes; $i++){
    $n = lerNumero('?');
    $x[] = $n;
}

$menor = $x[0];
$posicao = 0;

for ($i = 1; $i < count($x); $i++) {
    if ($x[$i] < $menor) {
        $menor = $x[$i];
        $posicao = $i;  
    }
}
echo "Menor valor: $menor\n";
echo "Posicao: $posicao\n";


// $i já é o índice
// $array[$i] é o valor


?>