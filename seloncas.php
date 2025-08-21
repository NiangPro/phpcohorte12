<?php 

$choix = 6;
echo "
    ********* MENU DU JOUR ********* <br>
    1- MAFFE <br>
    2- THIEBOU DJEUN <br>
    3- MBAXALL <br>
    Faites votre choix: $choix <br>

";

switch($choix){
    case 1: 
        echo "Génial vous avez choisi : Maffé";
        break;
    
    
        default: 
            echo "Désolé ! plat indisponible";
        break;
}