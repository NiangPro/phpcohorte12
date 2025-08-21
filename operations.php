<?php 

 echo "<h1> Les opérations </h1>";

 $a = 4;
 $b = 6;

 $somme = $a + $b;
 $difference = $a - $b;
 $produit = $a * $b;
 $ddecimal = $a / $b;
 
 $dentier = intval($a/$b);

 $reste = $a % $b;

 echo "
    a = $a et b = $b <br>
    $a + $b = $somme <br>
    Difference = $difference <br>
    produit = $produit <br>
    Decimal= $ddecimal <br>
    Entier = $dentier <br>
    Modulo = $reste;
 ";