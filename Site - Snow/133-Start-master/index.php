<?php
/**
 * 133-Start-master - index.php
 *
 * Initial version by : David-Manuel.VAROSO
 * Initial version created on : 16.12.2019 14:23
 *
 * Created By PhpStrom.
 * User : David Gomes
 * Date : 16.12.2019
 * Time : 14:23
 */


/* require est une sorte de librarie comme en C
Il y a 4 moyens d'appeler des fichier dans php : include, require, include-once, require-once
require = Si c'est pas la = erreur, programme plante
include = fait un warning mais continue
$_XX = variable globale
*/

require "controler/controler.php";

if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch ($action){
        case 'home' :
            home();
            break;
        case 'contact' :
            contact();
            break;
        default :
            home();

    }
}
else{
    home();

}


