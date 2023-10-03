//
<?php
// Créer deux tableaux associatifs d'étudiants
$etudiants1 = [
    ["nom" => "Nom1", "prénom" => "Prénom1", "âge" => 20, "note" => 85],
    ["nom" => "Nom2", "prénom" => "Prénom2", "âge" => 22, "note" => 92],
];

$etudiants2 = [
    ["nom" => "Nom2", "prénom" => "Prénom2", "âge" => 22, "note" => 92],
    ["nom" => "Nom3", "prénom" => "Prénom3", "âge" => 21, "note" => 78],
];

// Fusionner les tableaux en conservant les doublons
$etudiantsFusionnes = array_merge($etudiants1, $etudiants2);

// Afficher les étudiants fusionnés
echo "Étudiants fusionnés :<br>";
foreach ($etudiantsFusionnes as $etudiant) {
    echo "Nom : " . $etudiant["nom"] . ", Prénom : " . $etudiant["prénom"] . ", Âge : " . $etudiant["âge"] . ", Note : " . $etudiant["note"] . "<br>";
}

// Trouver les étudiants présents dans le premier tableau mais pas dans le deuxième
$etudiantsDifference = array_diff($etudiants1, $etudiants2);

// Afficher les étudiants différents
echo "<br>Étudiants présents dans le premier tableau mais pas dans le deuxième :<br>";
foreach ($etudiantsDifference as $etudiant) {
    echo "Nom : " . $etudiant["nom"] . ", Prénom : " . $etudiant["prénom"] . ", Âge : " . $etudiant["âge"] . ", Note : " . $etudiant["note"] . "<br>";
}

// Fusionner les tableaux en supprimant les doublons
$etudiantsFusionnesSansDoublons = array_merge(array_unique($etudiants1, SORT_REGULAR), array_unique($etudiants2, SORT_REGULAR));

// Afficher les étudiants fusionnés sans doublons
echo "<br>Étudiants fusionnés sans doublons :<br>";
foreach ($etudiantsFusionnesSansDoublons as $etudiant) {
    echo "Nom : " . $etudiant["nom"] . ", Prénom : " . $etudiant["prénom"] . ", Âge : " . $etudiant["âge"] . ", Note : " . $etudiant["note"] . "<br>";
}
?>

