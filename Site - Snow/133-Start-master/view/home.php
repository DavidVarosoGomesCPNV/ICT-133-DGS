<?php
/**
 * Created By PhpStrom.
 * Title : 133-Start-master - atest.php
 * User : David-Manuel.VAROSO
 * Date : 16.12.2019
 * Time : 13:47
 */

// tampon de flux stocké en mémoire
ob_start(); // Ouvre la mémoire tampon , tout ce qui est après ob_start sera dans la variable tampon
$titre = "Rent A Snow - Acceuil"

?>
    <div class="row-fluid">
        <div class="span12">

            <div id="headerSeparator"></div>

            <div class="camera_full_width">
                <div id="camera_wrap">
                    <div data-src="view/content/slider-images/4.jpg">
                        <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à
                            disposition.
                        </div>
                    </div>
                    <div data-src="view/content/slider-images/1.jpg">
                        <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des
                            sensations.
                        </div>
                    </div>
                    <div data-src="view/content/slider-images/2.jpg"></div>
                </div>
                <br style="clear:both"/>
                <div style="margin-bottom:40px"></div>
            </div>

            <div id="headerSeparator2"></div>

        </div>
    </div>

<!-- Début du calendrier -->
<!-- Css pour l'affichage du calendrier -->
    <link rel="stylesheet" type="text/css" href="/view/content/scripts/bootstrap/css/Calendar_Layout.css">

<?php

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
        echo $tableauMois[date("m") - 1];
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

            } else {
                // Else sa met just un li et affiche le reste du tableau
                echo '<li>';
                echo $Tableau[$i];
            }


        }

        ?>
    </ul>
<!-- Fin du calendrier, début de la partie "Nos activités" -->

    <div class="span12" id="divMain">
        <h1>Nos activités</h1>

        <p><strong>Rent A Snow</strong> est spécialisée dans la location de snows. Nous avons tout types de
            modèles :
        <ul>
            <li>des plus récents au plus anciens,
            <li>pour débutants ou confirmés,
            <li>pour de la piste ou du hors-piste
        </ul>
        La location peut se faire au jour, à la semaine, au mois ou à la saison.
        </p>
        <p>
            Nous proposons aussi des cours privés ou en petits groupe (4 personnes maximum) pour tous les
            niveaux avec des moniteurs certifiés par l'école suisse de snowboard au prix de 60.- /heure.
        </p>

        <br/>
        <br/>

        <div class="row-fluid">
            <div class="span3">
                <div class="box">
                    <i class="icon-wrench"></i>
                    <h4 class="title">Entretien</h4>
                    <hr/>
                    <p>
                        Le matériel est toujours contrôlé avant d'être mis à disposition des clients. A
                        chaque fois que vous louerez un snow, vous pouvez partir surfer tranquille.
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-leaf"></i>
                    <h4 class="title">Environnement</h4>
                    <hr/>
                    <p>
                        Nous veillons à respecter l'environnement en utilisant au maximum du matériel
                        recyclable et en prenant de consommer un minimum d'énergie lors de nos activités au
                        magasin,
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-edit"></i>
                    <h4 class="title">Contrat</h4>
                    <hr/>
                    <p>
                        Un contrat sera signé à chaque location. D'autre part nous travaillons en étroite
                        collaboration avec la Rega et garantissons des conditions de sauvetage optimales.
                    </p>
                </div>
            </div>

            <div class="span3">
                <div class="box">
                    <i class="icon-signal"></i>
                    <h4 class="title">Signal</h4>
                    <hr/>
                    <p>
                        Pour ceux qui aiments les sensations forte, nous louons du matériel de protection
                        d'avalanches.
                    </p>
                </div>
            </div>
        </div>


    </div>

<?php
$content = ob_get_clean(); // Libére la mémoire tampon dans une variable $content, donc tout ce qui est entre le ob_open et le ob_get_clean va dans la variable tampon
require "gabarit.php"; // Appele le fichier, il faut que le fichier existe pour que sa fonctionne