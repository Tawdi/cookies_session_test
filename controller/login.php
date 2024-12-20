<?php
session_start();
// var_dump(__DIR__ );
// die();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if (htmlspecialchars(trim($_POST['username'])) == "" || htmlspecialchars(trim($_POST['username'])) == "") {
        echo "<hr> try again <hr> ";
        require(__DIR__ . "./../view/login.view.php");
    } else {
        $_SESSION['username'] = htmlspecialchars(trim($_POST['username']));
        $_SESSION['password'] = htmlspecialchars(trim($_POST['password']));
        setcookie('username', $_SESSION['username'], time() + 3600 * 1); // 3600 == 60mim
        header('location: / ');
    }
} else {

    require(__DIR__ . "./../view/login.view.php");
}
