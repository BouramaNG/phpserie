<?php
//créez un générateur de mots qui combine des 
//préfixes et des suffixes pour former des mots fictifs.
//ici je vais cree des tableau de prefixe et de suffixe
$prefixes = ["Dakar", "Hann", "les", "Rue", "Avenue"];
$suffixes = ["ville", "Mariste", "parcellesAssainies", "VilleMbour", "Rusfique"];

$prefixesCreatures = ["Dragon", "anechabot", "Licorne", "Serpent"];
$suffixesCreatures = ["Ndiaye", "djiine", "nitougoudi", "Amadou"];

function bourama($prefixes, $suffixes) {
    $prefixAleatoire = $prefixes[array_rand($prefixes)];
    $suffixeAleatoire = $suffixes[array_rand($suffixes)];
    return $prefixAleatoire . $suffixeAleatoire;
}

$nomVille = bourama($prefixes, $suffixes);
echo "Nom de ville fictif : $nomVille"."</br>";



function genererNomCreatureFantastique($prefixes, $suffixes) {
    $prefixAleatoire = $prefixes[array_rand($prefixes)];
    $suffixeAleatoire = $suffixes[array_rand($suffixes)];
    return $prefixAleatoire . $suffixeAleatoire;
}

$nomCreature = genererNomCreatureFantastique($prefixesCreatures, $suffixesCreatures);
echo "Nom de créature fantastique : $nomCreature";
?>