<?php 


$prix_cinema = 1500;
$prix_pizza = 6000;
$reduction = 500;
$budget_total = 15000;

$nombre_personnes = 5;

$cout_total_cinema = $prix_cinema * $nombre_personnes;
$partage_prix_pizza = $prix_pizza / 5;


$total_par_personne = $prix_cinema+ $partage_prix_pizza;
$total_malick = $total_par_personne - $reduction;

$cout_depense = $total_par_personne * ($nombre_personnes -1) + $total_malick;


$somme_restante = $budget_total - $cout_depense;

echo " 

    cout total du cinéma: $cout_total_cinema Fcfa<br>
    Part de pizza par personne: $partage_prix_pizza Fcfa <br>
    Total à payer par Malik (réduction incluse) : $total_malick Fcfa <br>
    Total à payer pour les autres : $total_par_personne Fcfa <br>
    Total dépensé: $cout_depense Fcfa <br>
    Budget restant: $somme_restante Fcfa

";