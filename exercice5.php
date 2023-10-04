<?php
function calculerMoyenne($nombres) {
    if (empty($nombres)) {
        return 0; 
    }

    $somme = array_sum($nombres);
    $moyenne = $somme / count($nombres);
    return $moyenne;
}

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

$nombres =[10, 15, 19, 11, 17];
$moyenne = calculerMoyenne($nombres);
$resultat = regrouperNombres($nombres, $moyenne);

echo "Moyenne : $moyenne<br>";
echo "Nombres supérieurs à la moyenne : " . implode(", ", $resultat["superieurs"]) . "<br>";
echo "Nombres inférieurs à la moyenne : " . implode(", ", $resultat["inferieurs"]);

?>