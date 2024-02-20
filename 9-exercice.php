<?php
function calculerFrequenceCaracteres($chaine) {
    // Initialiser un tableau pour stocker les fréquences
    $frequence = [];

    // Parcourir chaque caractère dans la chaîne
    for ($i = 0; $i < strlen($chaine); $i++) {
        $caractere = $chaine[$i];

        // Ignorer les espaces
        if ($caractere != ' ') {
            // Incrémenter la fréquence du caractère dans le tableau
            if (isset($frequence[$caractere])) {
                $frequence[$caractere]++;
            } else {
                $frequence[$caractere] = 1;
            }
        }
    }

    // Afficher les résultats
    foreach ($frequence as $caractere => $nombre) {
        echo "Le caractère '$caractere' apparaît $nombre fois\n";
    }
}

// Exemple d'utilisation
$chaine = "programmation en PHP";
calculerFrequenceCaracteres($chaine ."/n" );
echo $chaine;

?>
