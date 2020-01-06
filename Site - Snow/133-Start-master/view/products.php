<?php
/**
 * Created By PhpStrom.
 * Title : 133-Start-master - products.php
 * User : David-Manuel.VAROSO
 * Date : 06.01.2020
 * Time : 14:38
 */


// tampon de flux stocké en mémoire
ob_start(); // Ouvre la mémoire tampon , tout ce qui est après ob_start sera dans la variable tampon
$titre = "Rent A Snow - Acceuil"
?>

<br>
<br>

Test Produits



<?php
$content = ob_get_clean(); // Libére la mémoire tampon dans une variable $content, donc tout ce qui est entre le ob_open et le ob_get_clean va dans la variable tampon
require "gabarit.php"; // Appele le fichier, il faut que le fichier existe pour que sa fonctionne