<?php 

$tab =  [
    "prenom" => "Moussa",
     "nom" => "Ndiaye", 
     "age" => 45
];

echo "Nom: ".$tab["nom"];

$matrice = [
    [4, 6, 90],
    [-9, 8, 56],
    [67, 18, 10]
];

echo $matrice[1][2];

for ($i=0; $i < count($matrice); $i++) {
    for ($j=0; $j < count($matrice[$i]); $j++) { 
        echo $matrice[$i][$j];
    }
}
echo "<br>";

foreach($matrice as $tableau){
    foreach($tableau as $valeur){
        echo "$valeur - ";
    }
}