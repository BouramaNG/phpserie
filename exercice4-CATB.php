<?php 
//déclaration des villes générés avec leur prefixe et suffixe dans un tableau
$prefixes = array('Saint-','Ville-','Nouveau-','Petit-','Grand-');
$suffixes = array('ville','bourg','ville-sur','less','mont'); 
print_r($prefixes). "\n";

print_r($suffixes). "\n";

function generates_word($prefixes,$suffixes){
    $prefix = $prefixes[array_rand($prefixes)];
    $suffix = $suffixes[array_rand($suffixes)];
    return $prefix.$suffix;
}
echo generates_word($prefixes, $suffixes) . "\n";
echo generates_word($prefixes, $suffixes) . "\n";
echo generates_word($prefixes, $suffixes) . "\n";

echo "------------------------------------- Coding Is Art  ------------------------------------------------------------------\n";

//déclaration des créatures fantastiques générés avec leur prefixe et suffixe dans un tableau
$prefixe = array(
    "Dra-",
    "Gryph-",
    "Manti-",
    "Serpen-",
    "Chimér-"
);
$suffixe = array(
    "on",
    "ix",
    "dra",
    "core",
    "phinx"
); 
print_r($prefixe). "\n";

print_r($suffixe). "\n";

function generate_word($prefixe,$suffixe){
    $prefix = $prefixe[array_rand($prefixe)];
    $suffix = $suffixe[array_rand($suffixe)];
    return $prefix.$suffix;
}
echo generate_word($prefixe, $suffixe) . "\n";
echo generate_word($prefixe, $suffixe) . "\n";
echo generate_word($prefixe, $suffixe) . "\n";

