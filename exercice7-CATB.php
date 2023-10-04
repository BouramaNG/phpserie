<?php
function DevinnerNombre() {
    $number = rand(1, 100);
    $devine = 0;
    $max_devine = 5;
    $number_tentatives_restants = $max_devine;
    $letters_deviner = array();
    while ( $devine  < $max_devine) {
        echo "Serigne bi wala Sokhna si devinelll nombre gnou nekk si diguenteh 1 and 100: ";
        $deviner = trim(fgets(STDIN)); // Utilisez fgets(STDIN) pour lire l'entrée de l'utilisateur

        if (!is_numeric($deviner)) {
            echo "Invalid input. Please enter a number.\n";
            echo "Serign bi wala Sokhna Si. balgnou  gua dougeul nombre.\n";
            continue;
        }

        $deviner = intval($deviner);

        if ( $deviner  < 1 ||  $deviner  > 100) {
            echo "Dougeuleul lou nekk si digueunte 1 ak 100.\n";
            continue;
        }

        if (in_array( $deviner,   $letters_deviner)) {
            echo "Vous avez déjà deviné ce nombre.\n";
            continue;
        }

        array_push(  $letters_deviner, $deviner );

        if ($deviner == $number) {
            echo "Félicitations Jambarr! Vous avez deviné le nombre dans " . ($devine + 1) . " Devine.\n";
            return;
        } else {
            if ( $deviner  < $number) {
                echo "Too low !!!!!!!!!!!!!!! - Yokalll !!!!!!!!!!!. ";
            } else {
                echo "Too high !!!!!!!!!!!!!!!- Wagnil  !!!!!!!!!!. ";
            }

            if (abs($number -  $deviner ) <= 5) {
                echo "You're close!\n";
            } else {
                echo "\n";
            }
        }

        $devine++;
        $number_tentatives_restants--;
        echo "Vous avez " . $number_tentatives_restants . "  Devinettes restants.\n";
        echo "Ligua déssé mogui tollou si  " . $number_tentatives_restants . " Devinettes \n";

    }

    echo "Désolé, vous n’avez pas deviné le nombre à temps. Le nombre était " . $number . ".\n";
    echo "Gno gui djegualou!!!, tontou yi gua djokhé dou yoyou. nombre bi gnou don xar mogui ni  " . $number . ".\n";

}

// Appel de la fonction pour jouer au jeu
DevinnerNombre();
