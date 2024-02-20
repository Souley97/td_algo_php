<?php

function rotationDroite(&$tab, $taille, $decalage) {
    $decalage = $decalage % $taille; // Assure que le décalage est dans la plage du tableau

    for ($i = 0; $i < $decalage; $i++) {
        $temp = $tab[$taille - 1];

        for ($j = $taille - 1; $j > 0; $j--) {
            $tab[$j] = $tab[$j - 1];
        }

        $tab[0] = $temp;
    }
}

// Saisie de la taille du tableau
echo 'Saisir la taille du tableau : ';
fscanf(STDIN,'%d', $n);

// Saisie des éléments du tableau
$tab = [];
for ($i = 0; $i < $n; $i++) {
    echo 'Saisir l\'élément ' . ($i + 1) . ' : ';
fscanf(STDIN,'%d', $tab[] );
}

// Saisie du nombre de positions pour la rotation à droite
echo 'Saisir le nombre de positions pour la rotation à droite : ';
fscanf(STDIN,'%d', $positions);

echo 'Tableau avant rotation : ' . implode(' ', $tab);

// Rotation à droite du tableau
rotationDroite($tab, $n, $positions);

echo 'Tableau après rotation : ' . implode(' ', $tab);

?>
