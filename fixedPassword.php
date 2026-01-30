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
while(true){
    
    $password = lerNumero('Password? ');

    if($password == 2002){
        echo "Acesso Permitido\n";
        break;
    }else{
        echo "Acesso Negado\n";
    }

}
?>