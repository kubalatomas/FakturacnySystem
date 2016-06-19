<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$error = "";

include("user.php");

if (!empty($_POST['submit'])) {
    if (empty($_POST['login']) || empty($_POST['password']) || empty($_POST['nazovFirmy']) || empty($_POST['ulica']) || empty($_POST['mesto']) || empty($_POST['psc']) || empty($_POST['stat']) || empty($_POST['ico']) || empty($_POST['dic']) || empty($_POST['cisloUctu']) || empty($_POST['banka']) || empty($_POST['iban']) || empty($_POST['swift'])) {
        $error = "Nevyplnili ste všetky údaje";
    } else {
        $login=$_POST['login'];
        $password=$_POST['password'];
        $nazovFirmy=$_POST['nazovFirmy'];
        $ulica=$_POST['ulica'];
        $mesto=$_POST['mesto'];
        $psc=$_POST['psc'];
        $stat=$_POST['stat'];
        $ico=$_POST['ico'];
        $dic=$_POST['dic'];
        $cisloUctu=$_POST['cisloUctu'];
        $banka=$_POST['banka'];
        $iban=$_POST['iban'];
        $swift=$_POST['swift'];
        $connection = mysqli_connect("localhost", "root", "root");
        if (!$connection) {
            die("Nepripojenie databazy");
        }
        $login = stripslashes($login);
        $password = stripslashes($password);
        $nazovFirmy = stripslashes($nazovFirmy);
        $ulica = stripslashes($ulica);
        $mesto = stripslashes($mesto);
        $psc = stripslashes($psc);
        $stat = stripslashes($stat);
        $ico = stripslashes($ico);
        $dic = stripslashes($dic);
        $cisloUctu = stripslashes($cisloUctu);
        $banka = stripslashes($banka);
        $iban = stripslashes($iban);
        $swift = stripslashes($swift);
        $login = mysqli_real_escape_string($connection, $login);
        $password = mysqli_real_escape_string($connection, $password);
        $nazovFirmy = mysqli_real_escape_string($connection, $nazovFirmy);
        $ulica = mysqli_real_escape_string($connection, $ulica);
        $mesto = mysqli_real_escape_string($connection, $mesto);
        $psc = mysqli_real_escape_string($connection, $psc);
        $stat = mysqli_real_escape_string($connection, $stat);
        $ico = mysqli_real_escape_string($connection, $ico);
        $dic = mysqli_real_escape_string($connection, $dic);
        $banka = mysqli_real_escape_string($connection, $banka);
        $iban = mysqli_real_escape_string($connection, $iban);
        $swift = mysqli_real_escape_string($connection, $swift);
        $cisloUctu = mysqli_real_escape_string($connection, $cisloUctu);
        $db = mysqli_select_db($connection, "faktury_online");
        if (!$db) {
            die("Nevybralo databazu");
        }
        $query = mysqli_query($connection, "SELECT login, password FROM uzivatelia WHERE login='$login'");
        if (!$query) {
            die("Nevybralo z databazy");
        }
        if (mysqli_num_rows($query) == 1) {
            $error = "Užívateľ s takýmto loginom už existuje.";
        } else {
            $sql = "INSERT INTO uzivatelia (login, password, subject, ulica, mesto, psc, stat, ico, dic, cislo_uctu, banka, iban, swift) VALUES ('$login', '$password', '$nazovFirmy', '$ulica', '$mesto', '$psc', '$stat', '$ico', '$dic', '$cisloUctu', '$banka', '$iban', '$swift')";
           
            if (mysqli_query($connection, $sql)) {
                header("Location: index.php");
            } else {
                mysqli_error($connection);
            }
            
            
        }
        mysqli_close($connection);
        
    }        
}
?>