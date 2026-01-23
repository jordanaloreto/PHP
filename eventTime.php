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

        echo "Digite apenas numeros inteiros.\n";
    }
}
function lerHora($mensagem){
    while (true){
        echo $mensagem;
        $entrada = trim(fgets(STDIN));

        $partes = explode(':', $entrada);

        if (count($partes) !== 3){
            echo "Use o formato HH:MM:SS\n";
            continue;
        }

        list($h, $m, $s) = $partes;

        if (
            filter_var($h, FILTER_VALIDATE_INT) !== false &&
            filter_var($m, FILTER_VALIDATE_INT) !== false &&
            filter_var($s, FILTER_VALIDATE_INT) !== false
        ){
            return [(int)$h, (int)$m, (int)$s];
        }

        echo "Hora invalida. Use apenas numeros.\n";
    }
}


function tempo($dia,$diaFim, $horaIni, $horaFim, $minIni, $minFim, $segIni, $segFim){
    $inicioEmSegundos = $dia * 86400 + $horaIni * 3600 + $minIni * 60 + $segIni;
    $fimEmSegundos    = $diaFim * 86400 + $horaFim * 3600 + $minFim * 60 + $segFim;

    $duracao = $fimEmSegundos - $inicioEmSegundos;

    $dias = intdiv($duracao, 86400);
    $duracao = $duracao % 86400;

    $horas = intdiv($duracao, 3600);
    $duracao = $duracao % 3600;

    $minutos = intdiv($duracao, 60);
    $duracao = $duracao % 60;

    $segundos = $duracao;

    return [$dias, $horas, $minutos, $segundos];
}

$dia = lerNumero("Dia Inicio: ");
list($horaIni, $minIni, $segIni) = lerHora("Hora inicio (HH:MM:SS): ");
$diaFim = lerNumero("Dia fim: ");
list($horaFim, $minFim, $segFim) = lerHora("Hora fim (HH:MM:SS): ");

list($dias, $horas, $minutos, $segundos) = tempo($dia,$diaFim, $horaIni, $horaFim, $minIni, $minFim, $segIni, $segFim);

echo "$dias dias, $horas:$minutos:$segundos\n";


?>