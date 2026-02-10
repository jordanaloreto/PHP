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

$array = [];

for ($i = 0; $i < 10; $i++) {
    $array[$i] = lerNumero('Digite: ');
}
for($i = 0; $i < 5; $i++) {
    $aux = $array[$i];
    $array[$i] = $array[9 - $i];
    $array[9 - $i] = $aux;
}
for ($i = 0; $i < 10; $i++) {
    echo "Array[$i] = {$array[$i]}\n";
}
// $i já é o índice
// $array[$i] é o valor


?>