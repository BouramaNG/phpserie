<?php
$prefixes = ["pre", "pro", "dis", "re", "un","pikine"];
$suffixes = ["tion", "ment", "er", "able", "ive","lapin"];

function generateur($prefixes,$sufixes){
    $prefixeAleatoir= $prefixes[array_rand($prefixes)];
    $sufixeAleatoir=$sufixes[array_rand($sufixes)];
  
    return $prefixeAleatoir. $sufixeAleatoir ;


}

$resultat=generateur($prefixes,$suffixes);
echo $resultat;



?>