<?php
// Tableaux de préfixes et de suffixes
$prefixes = ["Aero", "Bio", "Cyber", "Eco", "Geo"];
$suffixes = ["ville", "topia", "land", "polis", "burg"];
//cela vas prendre 

// Fonction pour générer un mot aléatoire
function genererMot($prefixes, $suffixes) {
    $prefixAleatoire = $prefixes[array_rand($prefixes)];
    $suffixeAleatoire = $suffixes[array_rand($suffixes)];
    return $prefixAleatoire . $suffixeAleatoire;
}

// Générer un mot aléatoire
$motAleatoire = genererMot($prefixes, $suffixes);
echo "Mot généré : $motAleatoire";
?>










