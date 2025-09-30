<?php 

$etudiant = [
    "nom" => "Diop",
    "prenom" => "Amina",
    "age" => "22 ans",
    "filiere" => "Informatique"
];

foreach($etudiant as $pos => $valeur){
    echo ucfirst($pos).": $valeur <br>";
}

$etudiant["note"] = 15;

foreach($etudiant as $pos => $valeur){
    echo ucfirst($pos).": $valeur <br>";
}