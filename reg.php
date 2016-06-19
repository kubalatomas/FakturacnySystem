<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$errors = array();

include 'user.php';
include 'checkdata.php';
include 'config.php';
//include("database.php");



if (!empty($_POST['submit'])) {
    if (empty($_POST['login']) || empty($_POST['password']) || empty($_POST['nazovFirmy']) || empty($_POST['ulica']) || empty($_POST['mesto']) || empty($_POST['psc']) || empty($_POST['ico']) || empty($_POST['dic']) || empty($_POST['banka']) || empty($_POST['iban'])) {
        array_push($errors, "Nevyplnili ste všetky údaje");
    } else {
        $login=$_POST['login'];
        $password=$_POST['password'];
        $nazovFirmy=$_POST['nazovFirmy'];
        $ulica=$_POST['ulica'];
        $mesto=$_POST['mesto'];
        $psc=$_POST['psc'];
        $ico=$_POST['ico'];
        $dic=$_POST['dic'];
        $banka=$_POST['banka'];
        $iban=$_POST['iban'];
        $login = strip_tags($login);
        $password = strip_tags($password);
        $nazovFirmy = strip_tags($nazovFirmy);
        $ulica = strip_tags($ulica);
        $mesto = strip_tags($mesto);
        $psc = strip_tags($psc);
        $ico = strip_tags($ico);
        $dic = strip_tags($dic);
        $banka = strip_tags($banka);
        $iban = strip_tags($iban);
        
        if (overLogin($login) != null) {
            array_push($errors, overLogin($login));
        }
        if (overPassword($password) != null) {
            array_push($errors, overPassword($password));
        }        
        if (overNazovFirmy($nazovFirmy) != null) {
            array_push($errors, overNazovFirmy($nazovFirmy));
        }
        if (overUlicu($ulica) != null) {
            array_push($errors, overUlicu($ulica));
        }
        if (overMesto($mesto) != null) {
            array_push($errors, overMesto($mesto));
        }
        if (overPSC($psc) != null) {
            array_push($errors, overPSC($psc));
        }
        if (overICO($ico) != null) {
            array_push($errors, overICO($ico));
        }
        if (overDIC($dic) != null) {
            array_push($errors, overDIC($dic));
        }
        if (overBanka($banka) != null) {
            array_push($errors, overBanka($banka));
        }
        if (overIBAN($iban) != null) {
            array_push($errors, overIBAN($iban));
        }
        
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
            $result = true;
        } else {
            $result = false;
        }     
        
        if ($result) {
            array_push($errors, "Užívateľ s takýmto prihlasovacím menom existuje. Zvoľte iné");
        }
        if(count($errors) == 0) {
            $login = mysqli_real_escape_string($conn, $login);
            $password = mysqli_real_escape_string($conn, $password);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $nazovFirmy = mysqli_real_escape_string($conn, $nazovFirmy);
            $ulica = mysqli_real_escape_string($conn, $ulica);
            $mesto = mysqli_real_escape_string($conn, $mesto);
            $psc = mysqli_real_escape_string($conn, $psc);
            $ico = mysqli_real_escape_string($conn, $ico);
            $dic = mysqli_real_escape_string($conn, $dic);
            $banka = mysqli_real_escape_string($conn, $banka);
            $iban = mysqli_real_escape_string($conn, $iban);
            $stat = "Slovenská Republika";
            $db = mysqli_select_db($conn, $dbname);
            if (!$db) {
                die("Nevybralo databazu");
            }
            $sql = "INSERT INTO uzivatelia (login, password, subject, ulica, mesto, psc, stat, ico, dic, banka, iban) VALUES ('$login', '$password', '$nazovFirmy', '$ulica', '$mesto', '$psc', '$stat', '$ico', '$dic', '$banka', '$iban')";
            if (mysqli_query($conn, $sql)) {
                header("Location: index.php");
            } else {
                $error = "Nepodarilo sa zaregistrovať uživateľa";
            }

        } 
        mysqli_close($conn); 
    }   
   
}
