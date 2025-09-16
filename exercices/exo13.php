<?php 

$tab = [34,4,6,5,7, 91,13];

for ($i=0; $i < count($tab); $i++) { 
    if ($tab[$i] % 2 != 0) {
        echo $tab[$i]." - ";
    }
}