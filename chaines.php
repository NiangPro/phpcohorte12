<?php

// les chaines de caracteres
$chaine =" ma chaine de caractere ";

echo strlen($chaine)."<br>"; // strlen renvoie la taille d'une chaine de caracteres
$chaine = trim($chaine); // efface les espaces au debut et a la fin d'un chaine

echo $chaine."<br>";
echo strlen($chaine)."<br>"; 

echo $chaine[strlen($chaine)-1]; // affiche le dernier caractere d'une chaine
echo strtoupper($chaine)."<br>";// convertir en majuscule
echo strtolower($chaine)."<br>"; // convertir chaine en minuscule

echo strpos($chaine, "de")."<br>"; //renvoie la position d'un caractere dans une chaine
echo substr($chaine,2,7)."<br>"; // extraire sous chaine dans une chaine
echo ucfirst($chaine)."<br>";// change le premier caractere d'une chaine en majuscule
echo ucwords($chaine)."<br>";// change chaque premier caractere d'un mot en majuscule


echo strrev($chaine)."<br>"; // renverse la chaine de caractere
?>