<?php
function concatenerChaines($tableau) {
    // Utiliser la fonction implode pour concaténer les éléments du tableau
    $nouvelleChaine = implode('', $tableau);
    
    return $nouvelleChaine;
}

// Exemple d'utilisation
$tableauChaines = ["Bonjour", " ", "le", " ", "monde"];
$nouvelleChaine = concatenerChaines($tableauChaines);

echo "Tableau de chaînes : " . implode(', ', $tableauChaines) . "\n";
echo "Nouvelle chaîne : " . $nouvelleChaine . "\n";
?>
