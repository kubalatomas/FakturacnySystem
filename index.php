<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
//include 'over.php';
if (!empty($_SESSION['loginuser'])) {
    header("Location: system.php");
}

?>



<html>
    <head>
        <title>FaktúryOnline - Prihlasovacia zóna</title>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <script src="jquery/jquery-2.2.0.min.js"></script>
        <script src="ajax.js"></script>
        
        
    </head>
    <body>
        
        <header>
            <div id="hlavicka">FaktúryOnline</div>
        </header>

        <div class="loginform">
            <h1>Prihlasovacia zóna</h1>
            <div id="login">
                <form id="login_form" method="post" action="">
                    <div class="label">Prihlasovacie meno</div>
                    <input id="login_input" name="login" type="text">
                    <div class="label">Heslo</div>
                    <input id="password_input" name="password" type="password">
                    <button id="login_button" type="submit" value="log_in">Prihlás sa</button>
                    <div id="tableregister">
                        <a id="reg" href="registracia.php">Registrácia</a>
                    </div>
                </form>
                <div id="message"></div>
            </div>
        </div>
    </body>
</html>

