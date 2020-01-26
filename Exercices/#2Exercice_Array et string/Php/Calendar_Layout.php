<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Css/Calendar_Layout.css">
    <title>Ah</title>
</head>
<body>

<form method="GET" action="Calendar_Layout.php">
    <select name="mois">
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>Jully</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
    </select>
    <br>
    <input type="submit">
</form>

<?php
/**
 * #2Exercice_DemoArrays - Calendar_Layout.php
 *
 * Initial version by : David-Manuel.VAROSO
 * Initial version created on : 02.12.2019 13:40
 */

// Tableaux simple avec les mois de l'année
$tableauMois = array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December'
);

?>
<!-- Passage en HTML pour l'affichage de l'en-tête avec le mois et l'année -->


<div class="month">

    <?php

/*Fonction pour les mois avec les jours dynamiques
     Jours dynamiques selon mois non implementé
*/


    function showMonth($element){
        echo $element;
        echo"<br>";
        echo"2020";
    }

    $Mois = @$_GET['mois'];

    if (isset($Mois)) {
        for($i=0;$i<12;$i++){
            switch ($Mois) {
                case $tableauMois[$i]:
                    showMonth($Mois);
                    break;
            }
        }

    }
    else
        echo date("F")."<br>"."2020";

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
    $boucle = 0;//variable de bouclage

    while ( $boucle<= 8-date("N") ) {
        echo "<li></li>";
        $boucle++;
    }


    for ($i = 1; $i <= 31; $i++) {
        // Atribution de la variable $i a l'index du tableau Tableau[$i]
        $Tableau[$i] = $i;

        // Condition IF pour le jour actif, si $i == format date chifre
        if ($i == date("d")) {
            // Active la classe "active" dans la case du tableau [$i] égale au chiffre du format date
            echo '<li><span class="active">' . $Tableau[$i] . '</span>';

        } else {
            // Else sa met just un li et affiche le reste du tableau
            echo '<li>';
            echo $Tableau[$i];
        }

    }




    ?>
</ul>


</body>

</html>