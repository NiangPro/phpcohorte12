<?php 

function calculerMoyenne($notes = []){
    if (count($notes) > 0) {
        $moyenne = array_sum($notes) / count($notes);

        echo "Vous avez une moyenne de $moyenne : ";
        if ($moyenne >= 0 && $moyenne < 10) {
            echo "Echec";
        }else if($moyenne >= 10 && $moyenne < 12){
            echo "Passable";
        }else if($moyenne >= 12 && $moyenne < 14){
            echo "Assez bien";
        }else if($moyenne >= 14 && $moyenne < 16){
            echo "Bien";
        }else if($moyenne >= 16 && $moyenne <= 20){
            echo "Tres bien";
        }else{
            echo "Verifiez les notes";
        }
    }else{
        echo "Votre tableau est vide";
    }
}

calculerMoyenne([12, 15, 9, 18, 14]);