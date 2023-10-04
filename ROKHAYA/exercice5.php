<?php 
function calcul_moyenne($numbers) {
    //array_sum est une fonction qui fait la somme des valeurs du tableau;
    $sum = array_sum($numbers);
    //
    $count = count($numbers);
    //count est fonction qui compte le nombre d'élèment dans le tableau ;
    $moyenne = $sum / $count;
   // echo $sup_moyenne qui contient le tableau des valeurs supérieurs;
    $sup_moyenne = array();
// echo $inf_moyenne qui contient le tableau des valeurs inferieurs;
   $inf_moyenne = array();
    //echo $below_average = ci dessous;
    foreach ($numbers as $number) {
        if ($number > $moyenne) {
    //array_push est une fonction qui permet d'ajouter la nombre superieur au tableau correspondant
            array_push($sup_moyenne, $number);
        } elseif ($number < $moyenne) {
            array_push($inf_moyenne, $number);
        }
    }
    return array('moyenne' => $moyenne, 'above_moyenne' => $sup_moyenne, 'below_moyenne' => $inf_moyenne);
}

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
print_r($numbers); 
$result = calcul_moyenne($numbers);
echo "La moyenne est de " . $result['moyenne'] . ".\n";
echo "Les nombres supérieurs à la moyenne sont: " . implode(", ", $result['above_moyenne']) . ".\n";
echo "Les nombres inférieurs à la moyenne sont: " . implode(", ", $result['below_moyenne']) . ".\n";
