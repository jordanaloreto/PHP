<?php
function lerNumero($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if(filter_var($valor, FILTER_VALIDATE_INT) !== false){
            return (int) $valor;
        }

        echo "Apenas inteiros.\n";
    }
}

function lerOpcao($mensagem){
    while (true){
        echo $mensagem;
        $valor = trim(fgets(STDIN));

        if ($valor === '') {
            return null;
        }

        return $valor; 
    }
}

$t = lerNumero('t? ');
for($i = 0; $i < $t; $i++){
    $vitorias = [
        "tesoura" => ["papel", "lagarto"],
        "papel" => ["pedra", "Spock"],
        "pedra" => ["lagarto", "tesoura"],
        "lagarto" => ["Spock", "papel"],
        "Spock" => ["tesoura", "pedra"]
    ];
    $sheldon = lerOpcao('');
    $raj = lerOpcao('');
    if ($sheldon == $raj) {
        echo "De novo!";
    }
    elseif (
        ($sheldon == "tesoura" && $raj == "papel") ||
        ($sheldon == "tesoura" && $raj == "lagarto") ||
        ($sheldon == "papel" && $raj == "pedra") ||
        ($sheldon == "papel" && $raj == "Spock") ||
        ($sheldon == "pedra" && $raj == "lagarto") ||
        ($sheldon == "pedra" && $raj == "tesoura") ||
        ($sheldon == "lagarto" && $raj == "Spock") ||
        ($sheldon == "lagarto" && $raj == "papel") ||
        ($sheldon == "Spock" && $raj == "tesoura") ||
        ($sheldon == "Spock" && $raj == "pedra")
    ) {
        echo "Bazinga!";
    }
    else {
        echo "Raj trapaceou!";
    }
}

?>