<?php
function supprimerDoublons($tableau) {
    // Utiliser array_unique pour supprimer les doublons
    $tableauSansDoublons = array_unique($tableau);
    
    // Réindexer le tableau pour réorganiser les clés
    $tableauSansDoublons = array_values($tableauSansDoublons);
    
    return $tableauSansDoublons;
}

// Exemple d'utilisation
$tableauOriginal = [1, 2, 2, 3, 4, 4, 5];
$tableauSansDoublons = supprimerDoublons($tableauOriginal);

echo "Tableau original : " . implode(', ', $tableauOriginal) . "\n";
echo "Tableau sans doublons : " . implode(', ', $tableauSansDoublons) . "\n";
?>
