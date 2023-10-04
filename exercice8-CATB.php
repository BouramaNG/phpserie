<?php
function compare_chaine($chaine1, $chaine2) {
    $result = strcmp($chaine1, $chaine2);
    if ($result < 0) {
        echo "$chaine1 est inférieure à $chaine2.\n";
    } elseif ($result > 0) {
        echo "$chaine1 est supérieure à $chaine2.\n";
    } else {
        echo "$chaine1 est égale à $chaine2.\n";
    }
}

compare_chaine("Bonjour", "bonjour");
compare_chaine("Bonjour", "Au revoir");
compare_chaine("Bonjour", "Bonjour");
