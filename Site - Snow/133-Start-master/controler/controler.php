<?php
/**
 * Created By PhpStrom.
 * Title : 133-Start-master - atest.php
 * User : David-Manuel.VAROSO
 * Date : 16.12.2019
 * Time : 14:50
 */


/**
 * Open the session, basic php function
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
    $_GET['action'] = "login";


    /** get the value of the login with the $POST */
    $email = @$_POST['email']; // Récupère ce que l'utilisateur rentre dans le formulaire champ email de la page login avec la méthode post
    $password = @$_POST['password']; // Pareil pour le champ password

    $_GET['action'] = 'login';
    // Vérifie que les champs email et password sont remplis correctement par rapport a la fonction checkLogin présente dans model
    if (checkLogin($email, $password)) {
        $_SESSION['element'] = $post['email'];
        $_SESSION['elementt'] = $post['password'];


        require "view/home.php";

    } else
        // Si sa return false il retourne sur la page login
        require "view/login.php";

}


/** fonction for the Logout */

function logout()
{
    /** Destroy what is in $_SESSION with the session_destroy then send the user back to home */
    $_SESSION = session_destroy();
    home();
}

/** Function for products */
function products()
{
    $_GET['action'] = 'products';
    require "view/products.php";
}

/** Function for register */
function register()
{
    // Writes in the JSON file stockageRegister but doesn't create a USER 
    $_GET['action'] = 'register';
    $JsonFile = "model/stockageRegister.json";

    $data = array(
        "Utilisateur" => @$_POST['email'],
        "Password" => @$_POST['password']

    );

    $JsonContent = json_encode($data);
    file_put_contents($JsonFile, $JsonContent);

    // echo pour tester si les valeurs rentrent bien dans le JSON
    // echo $JsonContent;


    require "view/register.php";
}



