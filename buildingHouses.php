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
$terreno = 0;
$lado = 0;
while(true){
    $A = lerNumero('A? ');
    $B = lerNumero('B? ');
    $C = lerNumero('C? ');
    if($A == 0){
        break;
    }
    $terreno = ($A * $B) / ($C / 100);
    $lado = sqrt($terreno);

    echo "$lado\n";
}

?>