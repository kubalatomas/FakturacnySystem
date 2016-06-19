<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
if (isset($_POST['username'])) {
    $login = $_POST['username'];
    
    $conn = mysqli_connect($dbhost, $dblogin, $dbpassword);

    $db = mysqli_select_db($conn, $dbname);
    if (!$db) {
        die("Nevybralo databazu");
    }
    
    $query = mysqli_query($conn, "SELECT login FROM uzivatelia WHERE login='$login'");
    if (!$query) {
        die();
    }
    if (mysqli_num_rows($query) == 1) {
        echo "exist";
    } else {
        echo "";
    }
    mysqli_close($conn);
}

