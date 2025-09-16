<?php 

$tab = [6, 8, 22, 28, 30];

for ($i=0; $i < count($tab); $i++) { 
    $som = 0;
    for ($j=1; $j < $tab[$i] ; $j++) { 
        if ($tab[$i] % $j == 0) {
            $som = $som + $j;
        }
    }

    if ($som == $tab[$i]) {
        echo $tab[$i]." - ";
    }
}