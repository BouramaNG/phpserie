<?php

$bourama = [
    ["nom" => "ngom", "prénom" => "Bourama", "âge" => 20, "note" => 20],
    ["nom" => "Niass", "prénom" => "Bour", "âge" => 22, "note" => 19],
];

$bounama = [
    ["nom" => "Ngome", "prénom" => "Bounanma", "âge" => 22, "note" => 17],
    ["nom" => "Niassy", "prénom" => "Bouna", "âge" => 21, "note" => 16],
];

$etudiantsFusionnes = array_merge($bourama, $bounama);

echo "Étudiants fusionnés :<br>";
foreach ($etudiantsFusionnes as $etudiant) {
    echo "Nom : " . $etudiant["nom"] . ", Prénom : " . $etudiant["prénom"] . ", Âge : " . $etudiant["âge"] . ", Note : " . $etudiant["note"] . "<br>";
}

$etudiantsDifference = array_diff($bourama, $bounama);

echo "<br>Étudiants présents dans le premier tableau mais pas dans le deuxième :<br>";
foreach ($etudiantsDifference as $etudiant) {
    echo "Nom : " . $etudiant["nom"] . ", Prénom : " . $etudiant["prénom"] . ", Âge : " . $etudiant["âge"] . ", Note : " . $etudiant["note"] . "<br>";
}

$etudiantsFusionnesSansDoublons = array_merge(array_unique($bounama, SORT_REGULAR), array_unique($bounama, SORT_REGULAR));

echo "<br>Étudiants fusionnés sans doublons :<br>";
foreach ($etudiantsFusionnesSansDoublons as $etudiant) {
    echo "Nom : " . $etudiant["nom"] . ", Prénom : " . $etudiant["prénom"] . ", Âge : " . $etudiant["âge"] . ", Note : " . $etudiant["note"] . "<br>";
}
?>