<?php
/**
 * Created By PhpStrom.
 * Title : 133-Start-master - atest.php
 * User : David-Manuel.VAROSO
 * Date : 16.12.2019
 * Time : 14:47
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
        case 'login' :
            login(@$_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'register' :
            register();
            break;
        case 'products' :
            products();
            break;
        default :
            home();

    }
}
else{
    home();
}


