<?php 


$age = 42;
$sexe = "Femme";
$heure = 2;
$a_invitation = false;


echo "
    Age: $age <br>
    Sexe: $sexe <br>
    Heure d'arrivée: $heure <br>
    Invitation:";

    if ($a_invitation) {
        echo "Oui <br>";
    }else{
        echo " Non <br>";
    }

if ($heure >= 0 && $heure <3) {
    if($age >= 18){
       if ($a_invitation || $sexe == "Femme") {
            echo "✅ Bienvenue! Entrée gratuite";
       }else if($sexe == "Homme" && $a_invitation == false){
            echo "💲Bienvenue! Veuillez payer 5000 Fcfa";
       }
    }else{
        echo "❌ Désolé, vous êtes trop jeune";
    }
}else{
    echo "🕰️Désolé, la boîte est fermée";
}