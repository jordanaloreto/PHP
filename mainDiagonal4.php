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

$o = lerNome("O: S ou M ");

$soma = 0;
$media = 0;
$contador = 0;

for($i = 0; $i <= 11; $i++){
    for($j =0; $j <= 11; $j++){
        $n = lerNumero('N: ');
        if($i + $j > 11){
            $soma += $n;
            $contador++;
        }
    }
}
if($o == 'S'){
    echo "Soma = $soma\n";
}else{
    $media = $soma / $contador;
    echo "$media\n";
}

?>