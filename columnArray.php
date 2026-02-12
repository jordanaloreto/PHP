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
function lerNome($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        return $valor; 
    }
}

$c = lerNumero("C: ");
$t = lerNome("T: ");

$soma = 0;
$media = 0;

for($i = 0; $i <= 11; $i++){
    for($j =0; $j <= 11; $j++){
        $n = lerNumero('N: ');
        if($j == $c){
            $soma += $n;
        }
    }
}
if($t == 'S'){
    echo "Soma = $soma\n";
}else{
    $media = $soma / 12;
    echo "$media\n";
}

?>