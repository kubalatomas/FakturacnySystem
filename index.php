<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
if (!empty($_SESSION['loginuser'])) {
    header("Location: system.php");
}
?>

<html>
    <head>
        <title>Login Form in PHP with Session</title>
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
    </head>
    <body>
        <header>
            <div id="hlavicka">FaktúryOnline</div>
        </header>

        <div class="loginform">
            <h1>Prihlasovacia zóna</h1>
            <div id="login">
                <form action="over.php" method="post">
                    <fieldset>
                        <dl>
                            <dt class="label">
                                Login
                            </dt>
                            <dd>
                                <input id="login" name="login" type="text">
                            </dd> 
                        </dl>
                        <dl>
                            <dt class="label">
                                Heslo
                            </dt>
                            <dd>
                                <input id="password" name="password" type="password">
                            </dd>
                        </dl>
                    </fieldset>
                    <div colspan="2" id="tablelogin">
                        <input id="login_button" name="submit" type="submit" value="Prihlás sa"> 
                    </div>  
                    <div id="tableregister">
                        <a id="reg" href="registracia.php">Registrácia</a>
                    </div>
                </form>
                
            </div>
        </div>
    </body>
</html>
