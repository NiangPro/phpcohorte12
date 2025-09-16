<?php

$tel="776426839";

if (ctype_digit($tel)) { // verifie si le numero contient que des chiffres
    if (strlen($tel)==9) { // verifie si la taille est 9
        if (str_starts_with($tel, "77") || str_starts_with($tel, "76") || str_starts_with($tel, "70") ||
            str_starts_with($tel, "71") || str_starts_with($tel, "33")|| str_starts_with($tel, "88") || str_starts_with($tel, "77")) {
                //verifie si le numero commence par 77 70 75 76 ....
            echo "Le numero de telephone est valide";
        }else{
            echo "le numero de telephone n'est pas valide";
        }
    }else{
        echo "le numero de telephone doit contenir 9 chiffres";
    }
}else{
    echo "le numero de telephone doit contenir que des chiffres <br/>";
}