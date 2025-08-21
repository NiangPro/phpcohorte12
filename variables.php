<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Les variables en php</h1>

    <?php 

        $prenom = "Modou";
        $nom = "Diop";
        $age = 24;
        $decimal = 34.78;
        $booleen = true;

        define("PI", 3.14);

        // echo "Prenom: ".$prenom;
        // echo "Prenom: $prenom";
        // echo 'Prenom:'.$prenom;

        echo "
            Prenom: $prenom <br>
            Nom: $nom <br>
            Age: $age <br>
            Decimal: $decimal <br>
            Booleen: $booleen <br>
        ";

        echo "Pi = ".PI;


    ?>
</body>
</html>