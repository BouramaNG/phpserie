<?php
//créez un générateur de mots qui combine des 
//préfixes et des suffixes pour former des mots fictifs.
//ici je vais cree des tableau de prefixe et de suffixe
$prefixe = ["Bou", "Hotaku", "Con", "haha"];
$suffix = ["Mariste", "Mangas", "Naruto", "Rire"];

function  genererMot($prefixe, $suffix)
{
    $prefixeAleatoire = $prefixe[array_rand($prefixe)];
    $suffixAleatoire = $suffix[array_rand($suffix)];
    return  $prefixeAleatoire . $suffixAleatoire;
}


?>