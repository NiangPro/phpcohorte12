<?php 

$tab = [4, -5, 78, 9, 13, 24, 17, 5];

for ($i=0; $i < count($tab) ; $i++) { 
    $cpt = 0;
    for ($j=1; $j <= $tab[$i] ; $j++) { 
        if ($tab[$i] % $j == 0) {
            $cpt++;
        }
    }

    if ($cpt == 2 || $tab[$i] == 1) {
        echo $tab[$i]." - ";
    }
}