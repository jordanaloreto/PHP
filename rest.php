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

        echo "Apenas numeros\n";
    }
}

$start = lerNumero('N1? ');
$finish = lerNumero('N2? ');

for($i = $start; $i <= $finish; $i++){
   if($i % 5 == 2 || $i % 5 == 3){
        echo "$i\n";
   }
}
?>
