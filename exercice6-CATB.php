<?php
$students1 = array(
    array('nom' => 'Ngom', 'prénom' => 'Bourama', 'âge' => 20, 'note' => 15),
    array('nom' => 'Khadidiatou', 'prénom' => 'Khadidiatou', 'âge' => 22, 'note' => 18),
    array('nom' => 'Touré', 'prénom' => 'Rokhaya', 'âge' => 21, 'note' => 12)
);

$students2 = array(
    array('nom' => 'Ngom', 'prénom' => 'Bounama', 'âge' => 20, 'note' => 15),
    array('nom' => 'Badiane', 'prénom' => 'Boyore', 'âge' => 23, 'note' => 16),
    array('nom' => 'Badji', 'prénom' => 'Tidiane', 'âge' => 19, 'note' => 14)
);

$merged_students = [...$students1, ...$students2];
echo "affiche le tableau fusionné des deux etudiants \n"; 
print_r($merged_students);

// Utilisation de array_udiff pour trouver les éléments différents
$students_diff = array_udiff($students1, $students2, 
function ($a, $b) {
    return $a === $b ? 0 : 1;
});
echo "le tableau affiche la difference des deux tableaux d'etudiants  \n";
print_r($students_diff); 

// $unique_merged_students = array();
// $seen = array();

// foreach ($merged_students as $student) {
//     $key = $student['nom'] . $student['prénom'];
    
//     if (!isset($seen[$key])) {
//         $unique_merged_students[$key] = $student;
//         $seen[$key] = true;
//     }
// }

// $unique_merged_students = array_values($unique_merged_students); // Réindexe le tableau


$unique_merged_students = array_map("unserialize", array_unique(array_map("serialize", $merged_students)));
echo "affiche le tableau fusionné en supprimant les doublons \n";
print_r($unique_merged_students);
?>
