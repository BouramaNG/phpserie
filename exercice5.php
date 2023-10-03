<?php
// Fonction pour calculer la moyenne
function calculerMoyenne($nombres) {
    $somme = array_sum($nombres);
    $moyenne = $somme / count($nombres);
    return $moyenne;
}

// Fonction pour regrouper les nombres supérieurs et inférieurs à la moyenne
function regrouperNombres($nombres, $moyenne) {
    $nombresSuperieurs = [];
    $nombresInferieurs = [];

    foreach ($nombres as $nombre) {
        if ($nombre > $moyenne) {
            $nombresSuperieurs[] = $nombre;
        } elseif ($nombre < $moyenne) {
            $nombresInferieurs[] = $nombre;
        }
    }

    return [
        "superieurs" => $nombresSuperieurs,
        "inferieurs" => $nombresInferieurs
    ];
}

$nombres = [10, 15, 20, 25, 30];
$moyenne = calculerMoyenne($nombres);
$resultat = regrouperNombres($nombres, $moyenne);

echo "Moyenne : $moyenne<br>";
echo "Nombres supérieurs à la moyenne : " . implode(", ", $resultat["superieurs"]) . "<br>";
echo "Nombres inférieurs à la moyenne : " . implode(", ", $resultat["inferieurs"]);
?>