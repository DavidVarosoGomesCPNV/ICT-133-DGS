<?php
/**
 * Created By PhpStrom.
 * Title : 133-Start-master - atest.php
 * User : David-Manuel.VAROSO
 * Date : 16.12.2019
 * Time : 14:50
 */

/**
 * Function to redirect the user to the home page
 * (depending on the action received by the index)
 */

/**
 * Ouvre la session, il s'agit d'une fonciton de base de PHP
 */
session_start();

require "model/model.php";

/** Function to redirect the user to the home page */
function home()
{
    $_GET['action'] = "home";
    require "view/home.php";
}

/** Function for login */
function login($post)
{
    $_GET['action']="login";


    /** récupere la valeur du login avec le $POST */
    $email = @$_POST['email']; // Récupère ce que l'utilisateur rentre dans le formulaire champ email de la page login avec la méthode post
    $password = @$_POST['password']; // Pareil pour le champ password

    $_GET['action'] = 'login';
    // Vérifie que les champs email et password sont remplis correctement par rapport a la fonction checkLogin présente dans model
    if (checkLogin($email, $password)) {
        $_SESSION['element']=$post['email'];
        $_SESSION['elementt']=$post['password'];
        /**
        echo $_SESSION['element'];
        echo $_SESSION['elementt'];
         */

        require "view/home.php";

    } else
        // Si sa return false il retourne sur la page login
       require "view/login.php";

}

// Logout

function logout(){
    $_SESSION =  session_destroy();
    home();
}

/** Function for products */
function products()
{
    $_GET['action'] = 'products';
    require "view/products.php";
}


