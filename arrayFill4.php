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



$par = [];
$impar = [];
for ($i = 0; $i < 10; $i++) {
    $n = lerNumero('N: ');
    if($n % 2 == 0){
        $par[] = $n;
    }else{
        $impar[] = $n;
    }
}
for ($i = 0; $i < count($par); $i++) {
    echo "Par[$i] = {$par[$i]}\n";
}
for ($i = 0; $i < count($impar); $i++) {
    echo "Impar[$i] = {$impar[$i]}\n";
}



// $i já é o índice
// $array[$i] é o valor


?>