<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'user.php';

session_start();
if (empty($_SESSION['loginuser'])) {
    header("Location: index.php");
}
$user = unserialize($_SESSION['loginuser']);
?> 

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type='text/css'>
        <script src="http://code.jquery.com/jquery-1.12.0.min.js" type='text/css'></script>
        <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js" type='text/css'></script>
        <script src="jquery/jquery-2.2.0.min.js"></script>
        <title>FaktúryOnline</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/system.css" type='text/css'/>
    </head>
    <body>

        <?php
            include 'header.php';
        ?>
        <?php
            if(isset($_GET['menu'])) {
                if($_GET['menu'] == "nastavenia") {
                    include 'nastavenia.php';
                } else if ($_GET['menu'] == "logout") {
                    include 'logout.php';
                } else if ($_GET['menu'] == "evidencia") {
                    include 'evidencia.php';
                } else if ($_GET['menu'] == "pridaj") {
                    include 'pridaj.php';
                }              
            } else {
                include 'domov.php';
                
            }

        ?>
                 
    </body>
</html>
