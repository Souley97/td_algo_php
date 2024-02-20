<?php
function calculerMediane($tableau) {
    // Trier le tableau par ordre croissant
    sort($tableau);

    // Obtenir la taille du tableau
    $taille = count($tableau);

    // Calculer la position médiane
    $positionMediane = $taille / 2;

    // Si la taille est impaire, retourner la valeur à la position médiane
    if ($taille % 2 != 0) {
        $mediane = $tableau[$positionMediane];
    } else {
        // Si la taille est paire, prendre la moyenne des deux valeurs au milieu
        $mediane = ($tableau[$positionMediane - 1] + $tableau[$positionMediane]) / 2;
    }

    return $mediane;
}

// Exemple d'utilisation
$tableauEntiers = [4, 2, 7, 1, 6, 3, 8];
$mediane = calculerMediane($tableauEntiers);

echo "Tableau d'entiers : " . implode(', ', $tableauEntiers) . "\n";
echo "Médiane : " . $mediane . "\n";
?>
