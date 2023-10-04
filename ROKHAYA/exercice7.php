
<?php
function jouerAuJeuDevinette($min, $max, $maxEssais) {
    $nombreSecret = rand($min, $max);
    $essais = 0;

    echo "Bienvenue dans le jeu de devinette du nombre entre $min et $max. Vous avez $maxEssais essais pour le deviner.\n";

    while ($essais < $maxEssais) {
        $essais++;

        $devinette = (int)readline("Essai $essais/$maxEssais : Devinez le nombre : ");

        
        if ($devinette === $nombreSecret) {
            echo "Félicitations ! Vous avez deviné le nombre en $essais essais.\n";
            return;
        } elseif ($devinette < $nombreSecret) {
            echo "Le nombre est plus grand. Essayez encore.\n";
        } else {
            echo "Le nombre est plus petit. Essayez encore.\n";
        }
    }

    echo "Désolé, vous avez épuisé tous vos essais. Le nombre secret était $nombreSecret.\n";
}


jouerAuJeuDevinette(1, 100, 10);

/*
function devinette($n, $nombreADeviner) {
    if ($n < $nombreADeviner) {
        return "plus grand";
    } elseif ($n > $nombreADeviner) {
        return "plus petit";
    } else {
        return "vous êtes proche";
    }
}

$lettresdeviner;
$nombresDerreur;
$lettresAdeviner;
function suivielettredeviner($nombreDErreurs, $lettresDevinées){
  
    
   
echo "Nombre d'erreurs : $nombreDErreurs\n";
    echo "Lettres devinées : " . implode(", ", $lettresDevinées) . "\n"; }git */




?>














?>
