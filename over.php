<?php //

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 
include 'user.php';
include 'config.php';
session_start();

//include("database.php");

if (isset($_POST['submit'])) {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $conn = mysqli_connect($dbhost, $dblogin, $dbpassword);

        if (!$conn) {
            die("Nepripojilo databazu");
        }
        $login=$_POST['login'];
        $password=$_POST['password'];
        $login = strip_tags($login);
        $password = strip_tags($password);
        $login = mysqli_real_escape_string($conn, $login);
        $password = mysqli_real_escape_string($conn, $password);
        $db = mysqli_select_db($conn, $dbname);
        
        if (!$db) {
            die("Nevybralo databazu");
        }
        $query = mysqli_query($conn, "SELECT login, password FROM uzivatelia WHERE login='$login'");
        if (!$query) {
            die("Nevybralo z databazy");
        }
        $pole = mysqli_fetch_assoc($query);
        if (mysqli_num_rows($query) === 1) {            
            if (!password_verify($password, $pole['password'])) {
                echo "Failed";
            } else {
                $query = mysqli_query($conn, "SELECT * FROM uzivatelia WHERE login='$login'");
                if (!$query) {
                    die("Nevybralo z databazy");
                }
                $pole = mysqli_fetch_assoc($query);
                
                $_SESSION['loginuser'] = serialize(new User($pole['login'], $pole['password'], $pole['subject'], $pole['ulica'], $pole['mesto'], $pole['psc'], $pole['ico'], $pole['banka'], $pole['iban'], $pole['dic'], $pole['id']));
                mysqli_close($conn);
                echo "success";           
            }
        
        } 
    }
}
            
        
    




