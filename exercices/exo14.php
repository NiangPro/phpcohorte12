<?php 

$tab = ["modou", 'pathe', 9, true, -5, 'mbaye'];

foreach($tab as $valeur){
    if (is_numeric($valeur)) {
        echo "$valeur - ";
    }
}