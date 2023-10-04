<?php

$etudiants1 = [
    ["nom" => "Smith", "prénom" => "John", "âge" => 20, "note" => 85],
    ["nom" => "Johnson", "prénom" => "Jane", "âge" => 22, "note" => 90],
    ["nom" => "Doe", "prénom" => "Alice", "âge" => 21, "note" => 78],
];

// Tableau associatif d'étudiants 2
$etudiants2 = [
    ["nom" => "Smith", "prénom" => "John", "âge" => 20, "note" => 85],
    ["nom" => "Williams", "prénom" => "Bob", "âge" => 23, "note" => 88],
];

// Fusionner les tableaux en conservant les doublons
$etudiantsFusionnes = [...$etudiants1, ...$etudiants2];

// Afficher le résultat de la fusion
echo "Fusion des tableaux avec doublons conservés :\n";
print_r($etudiantsFusionnes);

// Trouver les étudiants présents dans le premier tableau mais pas dans le deuxième
$etudiantsDiff = array_diff($etudiants1, $etudiants2);

// Afficher les étudiants présents dans le premier tableau mais pas dans le deuxième
echo "Étudiants présents dans le premier tableau mais pas dans le deuxième :\n";
print_r($etudiantsDiff);

// Fusionner les tableaux en supprimant les doublons
$etudiantsUniques = array_unique([...$etudiants1, ...$etudiants2], SORT_REGULAR);

// Afficher le résultat de la fusion sans doublons
echo "Fusion des tableaux en supprimant les doublons :\n";
print_r($etudiantsUniques);

?>



