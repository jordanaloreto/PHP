<?php

while(true){
    $n = (int) trim(fgets(STDIN));
    if ($n === false){
        break;
    }
    if($n == 0){
        echo "Vai ter Copa!\n";
    }else{
        echo "Vai ter duas Copas!\n";
    }
}

?>