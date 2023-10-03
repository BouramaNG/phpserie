
<?php
// Nombre à deviner (entre 1 et 100)
$nombreADeviner = rand(1, 100);

// Fonction pour jouer à la devinette
function jouerDevinette($nombreDevine) {
    global $nombreADeviner;
    
    if ($nombreDevine > $nombreADeviner) {
        return "Plus petit";
    } elseif ($nombreDevine < $nombreADeviner) {
        return "Plus grand";
    } else {
        return "Bravo, vous avez deviné le nombre $nombreADeviner !";
    }
}

// Exemple d'utilisation :
$devinette1 = jouerDevinette(50); // Essayez avec différentes valeurs
echo $devinette1;
?>