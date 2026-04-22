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
$ho = lerNumero('ho? ');
for($i = 0; $i < $ho; $i++){
   if($i == $ho - 1){
        echo "Ho!";
    } else {
        echo "Ho ";
    }
}

?>