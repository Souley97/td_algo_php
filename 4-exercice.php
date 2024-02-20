<?php

function compterVoyelles($chaine) {
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
    $nombreVoyelles = 0;

    // Convertir la chaîne en minuscules pour simplifier la comparaison
    $chaine = strtolower($chaine);

    // Parcourir chaque caractère de la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        // Vérifier si le caractère est une voyelle
        if (in_array($chaine[$i], $voyelles)) {
            $nombreVoyelles++;
        }
    }

    return $nombreVoyelles;
}

// Exemple d'utilisation
$tableauChaines = ["Bonjour", "Exercice", "Tableau", "Voyelles"];
foreach ($tableauChaines as $chaine) {
    $nombreVoyelles = compterVoyelles($chaine);
    echo "La chaîne '$chaine' contient $nombreVoyelles voyelles.\n";
}
?>
