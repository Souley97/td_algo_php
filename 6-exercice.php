<?php
function elementsSansDoublons($tableau) {
    // Utiliser la fonction array_count_values pour compter les occurrences de chaque élément
    $occurrences = array_count_values($tableau);

    // Filtrer les éléments qui n'ont qu'une occurrence (pas de doublons)
    $sansDoublons = array_filter($occurrences, function ($occurrence) {
        return $occurrence === 1;
    });

    // Récupérer les clés correspondantes dans le tableau d'origine
    $resultat = array_keys($sansDoublons);

    return $resultat;
}

// Exemple d'utilisation
$tableauOriginal = [1, 2, 2, 3, 4, 4, 5];
$sansDoublons = elementsSansDoublons($tableauOriginal);

echo "Tableau original : " . implode(', ', $tableauOriginal) . "\n";
echo "Éléments sans doublons : " . implode(', ', $sansDoublons) . "\n";
?>
