<?php 

// try {
//     echo 5/0;
// } catch (DivisionByZeroError $e) {
//     echo "Erreur: ".$e->getMessage();
// }

try {
    $db = new PDO("mysql:host=localhost;dbname=gomarket", "root", "");
} catch (PDOException $th) {
    echo "Erreur: ".$th->getMessage()." a la ligne ".__LINE__;
}

