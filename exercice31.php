<?php
//creation du fonction qui permet de calculer lheuer
function calculerHeure($HeureDebut, $HeureFin)
{
    $dureeEnSecondes = $HeureFin - $HeureDebut;
    $heures = floor($dureeEnSecondes / 3600);
    $minutes = floor(($dureeEnSecondes % 3600) / 60);
    $secondes = $dureeEnSecondes % 60;
    
    return "$heures heures $minutes minutes $secondes secondes";
}

echo calculerHeure(60, 3600) . "<br>";

    //il il affiche lheure et les minutes et les seconde
    //afficher la date actuel je vais utiliser la fonction redefis sur php
    $dateactuel = date("l j F Y");
    echo "La date actuelle est : ".$dateactuel."</br>";
    //verifiee si l'annee est bisextile lannee est biextile si il  set divisble par 4 et par 400 et non divisble par 100
    function anneBisextile($annee)
    {
      return (($annee % 4 == 0) && ($annee % 100 != 0) || ($annee % 400 == 0));
    }
    //apres on verifie si le lanne entre est bisextile
    $annee = 2024;
    if (anneBisextile($annee)) {
        echo "lannee que vous entrer est bisextile";
    }else {
        echo "lannee saisie nest pa bisextile";
    }

?>

