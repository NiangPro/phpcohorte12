<?php

$chaine = "mA chaine De caractères";

echo "Le nombre de caractères est de :".strlen($chaine);
echo "<br>Le nombre de caractères est de :".mb_strlen($chaine);

echo "<br>".$chaine[4];
echo "<br>".$chaine[strlen($chaine) - 1];

echo "<br>".strtolower($chaine);
echo "<br>".strtoupper($chaine);
echo "<br>".mb_strtoupper($chaine);
echo "<br>".ucfirst($chaine);
echo "<br>".ucwords($chaine);
echo "<br>".strrev($chaine);
echo "<br>".substr($chaine, 3, 6);
echo "<br>".substr($chaine, 3);

$tel = '345563a';

if (ctype_digit($tel)) {
    echo "<br> Uniquement des chiffres";
}else{
    echo "<br> D'autres caracteres";

}

$prenom = "modou9";
if (ctype_alpha($prenom)) {
    echo "<br> Uniquement des lettres";
}else{
    echo "<br> D'autres caracteres";

}

if (str_starts_with($tel, "34")) {
    # code...
}
