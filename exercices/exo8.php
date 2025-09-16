<?php
$chaine= "Bonjour tout le mondE";
$voyelles ="aeiouyAEUIOY";
$nbvoyelles=0;

for ($i=0; $i <strlen($chaine) ; $i++) { 
    if (strpos($voyelles, $chaine[$i])!==false ) {
        $nbvoyelles++;
    }
}
echo "le nombre total de voyelles est: $nbvoyelles";