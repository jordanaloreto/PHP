<?php
function lerTexto($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        if (preg_match('/^[\p{L}\s]+$/u', $valor)) {
            return $valor;
        }

        echo "Digite apenas letras.\n";
    }
}

function oquee($A, $B, $C){
    if($A == 'vertebrado'){
        if($B == 'ave'){
            if($C == 'carnivoro'){
                echo "aguia"."\n";
            }else{
                echo "pomba"."\n";
            }
        }else{
            if($C == 'onivoro'){
                echo "homem"."\n";
            }else{
                echo "vaca"."\n";
            }
        }
    }else{
        if($B == 'inseto'){
            if($C == 'hematofago'){
                echo "pulga"."\n";
            }else{
                echo "lagarta"."\n";
            }
        }else{
            if($C == 'onivoro'){
                echo "sanguessuga"."\n";
            }else{
                echo "minhoca"."\n";
            }
        }
    }
}

$A = lerTexto("A? ");
$B = lerTexto("B? ");
$C = lerTexto("C? ");

oquee($A, $B, $C);

?>