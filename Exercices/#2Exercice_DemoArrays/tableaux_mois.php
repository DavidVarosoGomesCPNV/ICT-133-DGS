<link rel="stylesheet" href="">
<?php
$Tableau = array();
$Test = array();
$DateDefine = date_create('2009-1-07');
echo date_format($DateDefine,'F');
echo '<hr>';
?>
<table>
    <?php
    /**
     * #2Exercice_DemoArrays - tableaux_mois.php
     *
     * Initial version by : David-Manuel.VAROSO
     * Initial version created on : 25.11.2019 14:17
     */


    echo '<tr>';
    for($i=1;$i<=31;$i++){

        $Tableau[$i] = $i;
        echo $Tableau[$i];
        if($i == 7 || $i == 14 || $i == 21 || $i == 28){
            echo '<br>';
            echo '</td>';
            echo '</tr>';
        }

    }
    echo'</table>';
    echo'<table>';
//
        echo '<tr>';
        for ($i = 1; $i <= 31; $i++) {

            $Test[$i] = $i;
            echo $Test[$i];
            if ($i == 7 || $i == 14 || $i = 21 || $i == 28) {
                echo '<br>';
                echo '</td>';
                echo '</tr>';
            }
        }
        echo '</table>';

    ?>













