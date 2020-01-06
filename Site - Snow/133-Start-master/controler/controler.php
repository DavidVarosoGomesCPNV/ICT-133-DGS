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
function home(){
    $_GET['action']="home";
    require "view/home.php";
}

function login(){
    $_GET['action']='login';
    require "view/login.php";
}

function products(){
    $_GET['action']='products';
    require "view/products.php";
}

