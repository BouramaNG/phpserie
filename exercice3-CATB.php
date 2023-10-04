<?php 

$datedebut = strtotime('9:30');
$datefin = strtotime('14:45'); 
//la fonction strtotime permet de convertir les heures en secondes
echo "date de début : " . $datedebut  . "  date de fin :  " . $datefin;
//la différence totale des deux secondes converties
$total_de_second = $datefin - $datedebut;
echo $total_de_second;
//récupérer le nombre total de secondes 
$total_de_heures = floor($total_de_second / 3600);
$total_de_minutes = floor(($total_de_second % 3600) / 60);
//affichage des heures, des minutes et des secondes
echo ("\nLa durée totale est de $total_de_heures heures $total_de_minutes minutes et $total_de_second de secondes.");

//Afficher la date  actuelle en utilisant date()
$aujourdhui = date('l j F Y'); 

echo "\nAujourd'hui, c'est $aujourdhui.";

//Verifier si l'année de bissextile 
function is_bissextile($year) {
    return date('j', strtotime("$year-02-29")) === '29';
}

if (is_bissextile(2023)) {
    echo "\n2023 est une année bissextile.";
} else {
    echo "\n2023 n'est pas une année bissextile.";
}

?>
