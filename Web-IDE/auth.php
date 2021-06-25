<?php
// Login
$username = "admin";
$password = "admin";







// Code

session_start();


if ($_POST["username"] === $username){
    if ($_POST["password"] === $password){
        header("Location: home.php");
        $_SESSION['loggedin'] = TRUE;







    } else {
        echo("The credentials are incorrect!");
        header("Location: index.php");
    }



} else {
    echo("The credentials are incorrect!");
    header("Location: index.php");
}
