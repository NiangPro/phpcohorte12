<?php 

echo "<pre>";
$tableau = ["modou", 56, 5.5];
$tab = ["mbaye", 56, true, 6.9];
$tabentiers = array(4, -5, 67, -12);

echo $tableau[0];
echo "<br> Nombre d'elements : ".count($tabentiers);

$ch = "Ma chaine";

echo "<br>".$ch[strlen($ch) - 1];
echo "<br>".$tableau[count($tableau) - 1];

// ajouter un element dans un tableau (fin)
$tableau[] = "Rassoul";
array_push($tableau, "Pathe");
// ajouter un element dans un tableau (debut)
array_unshift($tableau, "Nouveau");

// supprimer un element 
array_pop($tableau);
array_shift($tableau);

// ajouter, modifier et supprimer 
array_splice($tableau,1,0,"Sarr");
array_splice($tableau, 2, 1, 10);
array_splice($tableau, 3, 1);

$tableau = array_reverse($tableau);
print_r($tableau);

sort($tabentiers);
rsort($tabentiers);
print_r($tabentiers);

for ($i=0; $i < count($tabentiers); $i++) { 
    if ($tabentiers[$i] >0 && $tabentiers[$i] % 2 == 0) {
        echo $tabentiers[$i]." - ";
    }
}

foreach($tableau as $pos => $element){
    echo "$pos  : $element * ";
}

if (in_array("rassoul", $tableau)) {
    echo "<br> mot trouve";
}else{
    echo "<br> mot introuvable";
}

echo "</pre>";
