<?php
function supprimerDoublons($tableau) {
    $tableauSansDoublons = array_unique($tableau);
    
    $tableauSansDoublons = array_values($tableauSansDoublons);
    
    return $tableauSansDoublons;
}

$tableauOriginal = [1, 2, 2, 3, 4, 4, 5];
$tableauSansDoublons = supprimerDoublons($tableauOriginal);

echo "Tableau original : " . $tableauOriginal . "\n";
echo "Tableau sans doublons : " .  $tableauSansDoublons . "\n";
?>
