<?php

$tabEntiers = array();
$n = 0;
$produit = 1;

// Saisir la taille du tableau
echo "Saisir la taille du tableau : ";
fscanf(STDIN, "%d", $n);

$produit = 1;

for ($i = 1; $i <= $n; $i++) {
    echo "Saisir l'élément ", $i, " : ";
    fscanf(STDIN, "%d", $tabEntiers[$i]);
    $produit *= $tabEntiers[$i];
}

echo "Le produit des éléments du tableau est : ", $produit;




