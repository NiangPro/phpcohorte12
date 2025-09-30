<?php 
echo "<pre>";

if (isset($_POST["register"])) {
    # code...
    print_r($_POST);
    
    echo "Prenom:".$_POST["prenom"];
}else{
    echo "Veuillez renseigner d'abord le formulaire<br>";
    echo "<a href='formulaire.php' >Cliquer ici </a>";
}


echo "</pre>";