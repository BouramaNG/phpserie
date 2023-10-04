<?php
$nombreADeviner = rand(1, 100);
function jouerDevinette($nombreDevine) {
    global $nombreADeviner;
    
    if ($nombreDevine > $nombreADeviner) {
        return "Plus petit";
    } elseif ($nombreDevine < $nombreADeviner) {
        return "Plus grand";
    } else {
        return "Bravo, vous avez deviné le nombre $nombreADeviner !";
    }
}

$devinette1 = jouerDevinette(50);
echo $devinette1;
?>