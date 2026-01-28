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

$animais = lerNumero('Repeticoes? ');
$totalCobaias = 0;
$totalCoelhos = 0;
$totalSapos = 0;
$totalRatos = 0;
for($i = 0; $i < $animais; $i++){
    $coelhos = lerNumero('Coelhos? ');
    $sapos = lerNumero('Sapos? ');
    $ratos = lerNumero('Ratos? ');
    $totalCobaias = $totalCobaias + $coelhos + $sapos + $ratos;
    $totalCoelhos = $totalCoelhos + $coelhos;
    $totalSapos = $totalSapos + $sapos;
    $totalRatos = $totalRatos + $ratos;
}

$porCoelhos = ($totalCoelhos / $totalCobaias) * 100;
$porSapos = ($totalSapos / $totalCobaias) * 100;
$porRatos = ($totalRatos / $totalCobaias) * 100;

echo "Total $totalCobaias Cobaias"."\n";
echo "Total $totalCoelhos Coelhos"."\n";
echo "Total $totalSapos Sapos"."\n";
echo "Total $totalRatos Ratos"."\n";
echo "% $porCoelhos Coelhos"."\n";
echo "% $porSapos Sapos"."\n";
echo "% $porRatos Ratos"."\n";


?>