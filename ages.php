<?php
function lerNota($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if($valor === ''){
            return null;
        }

        if(filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Digite numeros.\n";
    }
}
$ages = [];

while(true){
    $age = lerNota("Digite as idades ");
    
    if($age >= 0){
        $ages[] = $age;
    }else{
        break;
    }
}

if(count($ages) === 0){
    echo "Nenhuma age informada\n";
    exit;
}

$soma = 0;
foreach($ages as $n){
    $soma += $n;
}

$media = $soma / count($ages);

echo "Media: = $media";

?>
