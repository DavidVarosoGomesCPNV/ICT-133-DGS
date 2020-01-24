<?php
/**
 * Created By PhpStrom.
 * Title : 133-Start-master - model.php
 * User : David-Manuel.VAROSO
 * Date : 06.01.2020
 * Time : 15:03
 * @return bool
 */

// Fonction pour vérifier que le login / mot de passe rentrées par l'utilisateurs sont justes
// les $element reprenent les valeurs de $email et $password du controler


function checkLogin($element,$elementt){
    if ($element == "David-Manuel.VAROSO-GOMES@cpnv.ch" && $elementt == "1234"){
        // Si tout les paramètres au dessus sont justes il return true au if du controler
        return true;
    }
    else
        // Si un des 2 elements est faux il return false au if du cotroler
        return false;


}


/*
 * Fonction pour ajouter un utilisateur avec le register *NON FONCTIONEL*
 *
function checkLogin($element,$elementt)
{
    $JsonContent = json_decode("/model/stockageRegister.json");

    if ($element == $JsonContent['Utilisateur'] && $elementt == $JsonContent['Password']) {
        return true;
    } else
        return false;




}
*/


