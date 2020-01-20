<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Css/Calendar_Layout.css">
    <title>Ah</title>
</head>
<body>
<?php
/**
 * #2Exercice_DemoArrays - Calendar_Layout.php
 *
 * Initial version by : David-Manuel.VAROSO
 * Initial version created on : 02.12.2019 13:40
 */

// Tableaux simple avec les mois de l'année
$tableauMois = array(
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
);

?>
<!-- Passage en HTML pour l'affichage de l'en-tête avec le mois et l'année -->
<div class="month">
    <?php
    // Création de l'en-tête
    echo '<ul>';
    echo '<li class="prev">&#10094;</li>';
    echo '<li class="next">&#10095;</li>';
    // Affichage du mois dynamiqueent avec la fonction date de php "m" avec un -1 car on utilise un tableau donc index 0
    echo $tableauMois[date("m") -1];
    echo '<br>';
    // Affiche l'année avec le format date php
    echo(date("o"));
    echo '</li>';
    echo '</ul>';
    ?>
</div>

<!-- Début HTML pour les jours de la semaine -->
<ul class="weekdays">
    <?php
    // Passage en PHP
    // Tableau associatif des jours de la semaine
    $tableauJours = array(
        'Lundi' => 'Lun',
        'Mardi' => 'Mar',
        'Mercredi' => 'Mer',
        'Jeudi' => 'Jeu',
        'Vendredi' => 'Ven',
        'Samedi' => 'Sam',
        'Dimanche' => 'Dim',
    );
    // Affiche en boucle foreach les jours de la semaine grâce au tableau associatif
    foreach ($tableauJours as $Jours) {
        echo "<li>$Jours</li>";
    }

    ?>
</ul>
<!-- Début HTML pour les jours du mois en chiffre -->
<ul class="days">
    <?php
    // Déclaraition du tableau
    $Tableau = array();
    // Début de la boucle pour l'affichage des 31 jours

    // Boucle pour faire en sorte que les jours "Lun,Mar, etc," correspondent au bon chiffre du tableau
    //
    for ($i = 1; $i < 8 - date("N"); $i++) {
        echo '<li></li>';

    }


    for ($i = 1; $i <= 31; $i++) {
        // Atribution de la variable $i a l'index du tableau Tableau[$i]
        $Tableau[$i] = $i;

        // Condition IF pour le jour actif, si $i == format date chifre
        if ($i == date("d")) {
            // Active la classe "active" dans la case du tableau [$i] égale au chiffre du format date
            echo '<li><span class="active">' . $Tableau[$i] . '</span>';

        }
        else {
            // Else sa met just un li et affiche le reste du tableau
            echo '<li>';
            echo $Tableau[$i];
        }


    }

    ?>
</ul>


</body>

</html>