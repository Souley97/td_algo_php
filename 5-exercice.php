<?php
function trouverElementsCommuns($tableau1, $tableau2) {
    // Utiliser la fonction array_intersect pour trouver les éléments communs
    $elementsCommuns = array_intersect($tableau1, $tableau2);

    return $elementsCommuns;
}

// Exemple d'utilisation
$tableau1 = [1, 2, 3, 4, 5];
$tableau2 = [3, 4, 5, 6, 7];

$elementsCommuns = trouverElementsCommuns($tableau1, $tableau2);

if (!empty($elementsCommuns)) {
    echo "Les éléments communs sont : " . implode(', ', $elementsCommuns) . "\n";
} else {
    echo "Il n'y a pas d'éléments communs entre les deux tableaux.\n";
}
?>
