<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {

    $message = "welcome " . $_SESSION["username"] . " ,  you are in   home page  <hr><form action='./../controller/logout.php' method='post'><button type='submit' name='logout'> log out </button></form>";
} else {
    $message = '<hr><a href="./../controller/login.php"> log in</a>';
}
if (isset($_POST['cookie_form'])) {
    var_dump($_POST);
    // setcookie('lg', "");
    // var_dump($_COOKIE['lg']);die();
    setcookie('lg', $_POST["langue"], time() + 3600 * 1);
    header('location: /');
}
var_dump($_COOKIE['lg']);
require('view/index.view.php');
