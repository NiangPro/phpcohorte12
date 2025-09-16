<?php 

$tel = "777g57585";

if (ctype_digit($tel)) {
    if (strlen($tel) == 9) {
        if (str_starts_with($tel, "70") || str_starts_with($tel, "75") || str_starts_with($tel, "76") || str_starts_with($tel, "77") ) {
            echo "Votre numero: $tel est valide";
        }else{
            echo "Il doit commencer par 70, 75, 76, 77, 78, 71, 88 ou 33";
        }
    }else{
        echo "Il doit avoir 9 chiffres";
    }
}else{
    echo "Le numero de telephone doit comporter uniquement des chiffres";
}