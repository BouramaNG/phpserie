
<?php

$etudiants1 = array(
    array("nom" => "Toure", "prénom" => "Rokhaya", "âge" => 20, "note" => 20),
    array("nom" => "Badji", "prénom" => "Tidiane", "âge" => 22, "note" => 20),
    array("nom" => "Bourama", "prénom" => "Ngom", "âge" => 21, "note" => 20)
);

$etudiants2 = array(
    array("nom" => "Badji", "prénom" => "Tidiane", "âge" => 22, "note" => 20),
    array("nom" => "Sow", "prénom" => "Mamadou", "âge" => 23, "note" => 18)
);

$etudiantsFusionnes = [...$etudiants1, ...$etudiants2];
echo "Fusion des tableaux avec doublons conservés :\n";
print_r($etudiantsFusionnes);
$etudiantsDiff = array_diff($etudiants1, $etudiants2);
echo "Étudiants présents dans le premier tableau mais pas dans le deuxième :\n";
print_r($etudiantsDiff);
$etudiantsUniques = array_unique([...$etudiants1, ...$etudiants2], SORT_REGULAR);
echo "Fusion des tableaux en supprimant les doublons :\n";
print_r($etudiantsUniques);

?>



