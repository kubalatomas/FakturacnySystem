<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$error = "";
session_start();
include("user.php");
if (!empty($_POST['submit'])) {
    if (empty($_POST['login']) || empty($_POST['password'])) {
        $error = "nevyplnene";
    } else {
        $login=$_POST['login'];
        $password=$_POST['password'];
        $connection = mysqli_connect("localhost", "root", "root");
        if (!$connection) {
            die("Nepripojenie databazy");
        }
        $login = stripslashes($login);
        $password = stripslashes($password);
        $login = mysqli_real_escape_string($connection, $login);
        $password = mysqli_real_escape_string($connection, $password);
        $db = mysqli_select_db($connection, "faktury_online");
        if (!$db) {
            die("Nevybralo databazu");
        }
        $query = mysqli_query($connection, "SELECT login, password FROM uzivatelia WHERE password='$password' AND login='$login'");
        if (!$query) {
            die("Nevybralo z databazy");
        }
        if (mysqli_num_rows($query) == 1) {
            $query = mysqli_query($connection, "SELECT * FROM uzivatelia WHERE login='$login'");
            $pole = mysqli_fetch_assoc($query);
            $_SESSION['loginuser'] = new User($pole['login'], $pole['password'], $pole['subject'], $pole['ulica'], $pole['mesto'], $pole['psc'], $pole['stat'], $pole['ico'], $pole['dic'], $pole['cislo_uctu'], $pole['banka'], $pole['iban'], $pole['swift']);
            header("Location: system.php");
        } else {
            $error = "zle";
        }
        mysqli_close($connection);
    }
} else {
    header("Location: index.php");
}
?>

<html>
    <head>
        <title>title</title>
        <link href="css/index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="loginform">
            <?php echo $error ?>    
        </div>

    </body>
</html>
