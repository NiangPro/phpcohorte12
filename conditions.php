<?php 

$age = 32;

if ($age >= 18) {
    echo "Vous êtes majeur";
}else if($age < 18){
    echo "Vous êtes mineur";
}

$note = 2;

if ($age >= 18 || $note >= 10) {
    echo "<br> partant";
}else{
    echo "<br> restant";
}