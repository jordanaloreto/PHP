<?php
function lerNota($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if($valor === ''){
            return null;
        }

        if(filter_var($valor, FILTER_VALIDATE_FLOAT) !== false && $valor >= 0 && $valor <= 10){
            return (float) $valor;
        }

        echo "Digite numero decimal de 0 a 10 ou ENTER pra parar.\n";
    }
}
$notas = [];

while(true){
    $nota = lerNota("Digite a nota: ");
    
    if($nota === null){
        break;
    }

    $notas[] = $nota;
}

if(count($notas) === 0){
    echo "Nenhuma nota informada\.n";
    exit;
}

$soma = 0;
foreach($notas as $n){
    $soma += $n;
}

$media = $soma / count($notas);

echo "Media: = $media";

// Quando eu digito enter o php entende como string vazia, por isso tenho que fazer o if, pra ele não retornar o erro, falando que não é float
?>
