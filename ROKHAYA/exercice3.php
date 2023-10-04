<?php
function calculedurees($h_debut, $h_fin)
{
    $tempsdebut=strtotime($h_debut);
    $tempsfin=strtotime($h_fin);
    $duresecond= $tempsfin- $tempsdebut;
    $dureheur=floor($duresecond/3600);
    $dureminute=floor(($duresecond%3600)/60);
    return[$duresecond, $dureheur,$dureminute];
}


$dateactuel=date('l d f y');
echo"aujourdhuit c'est le $dateactuel";



// Définition d'une fonction nommée "estBissextile" qui prend en paramètre une année
function estBissextile($annee) {
    // Une année bissextile est divisible par 4
    // Sauf si elle est divisible par 100
    // Mais elle est quand même bissextile si elle est divisible par 400

    // La condition vérifie si l'année est bissextile selon les règles énoncées
    if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
        // Si l'année est bissextile, la fonction renvoie "true"
        return true;
    } else {
        // Sinon, elle renvoie "false"
        return false;
    }
}

// Exemple d'utilisation de la fonction
$annee = 2024;

// On appelle la fonction "estBissextile" avec l'année 2024
if (estBissextile($annee)) {
    // Si la fonction renvoie "true", on affiche que l'année est bissextile
    echo "$annee est une année bissextile.";
} else {
    // Sinon, on affiche que l'année n'est pas bissextile
    echo "$annee n'est pas une année bissextile.";
}

?>












?>