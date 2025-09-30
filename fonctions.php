<?php 


function sayHello(){
    echo "Bonjour tout le monde <br>";
}

function sayHelloAt($prenom){
    echo "Bonjour $prenom <br>";
}

function somme($a, $b){
    echo "$a + $b =".($a+$b)."<br>";
}

sayHello();
$prenom = "Mbaye";
sayHelloAt("Moussa");
sayHelloAt($prenom);

somme(5, 10);