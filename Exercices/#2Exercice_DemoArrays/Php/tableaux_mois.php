<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" href="Css/tableaux_mois.css">
    <title>Calendrier PHP</title>
</head>

<body>

<?php
// Déclaration du tableau
$Tableau = array();

// Ajout de la date dynamique
echo date('F');

// Affichage du tableau avec un echo
echo '<table class="tableau">';

// Cartouche
/**
 * #2Exercice_DemoArrays - tableaux_mois.php
 *
 * Initial version by : David-Manuel.VAROSO
 * Initial version created on : 25.11.2019 14:17
 */

echo '<hr>';
echo '<tr>';

// Boucle for pour afficher le tableau de 1 à 31
for ($i = 1; $i <= 31; $i++) {

    // Atribution de la variable $i a l'index du tableau Tableau[$i]
    $Tableau[$i] = $i;

    // Condition pour colorier 1 case sur 2 avec le % Modulo

    if ($i % 2 != 1) {
        echo "<td class='bleu_td'>$Tableau[$i]</td>";
        // $bgcolor = (($i+$j)%2 == 0)? "#FFFFFF" : "#558BC5"; exemple pdf

    } else {
        // Else la case est blanche
        echo "<td class='blanc_td'>$Tableau[$i]</td>";
    }

    // Condition pour mettre a la ligne a chaque multiple de 7
    if ($i == 7 || $i == 14 || $i == 21 || $i == 28) {
        echo '</td>';
        echo '</tr>';
    }

}
// Fermeture de la balise du tableau
echo '</table>';




?>

</body>
</html>












