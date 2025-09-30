<?php
function calculerreduction($prixinitial,$reduction){
   $reduction=($prixinitial * $reduction)/100;
   return $prixinitial-$reduction;
}

 echo "Le montant de reduction:".calculerreduction(20000,10);

