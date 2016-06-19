<?php

include 'checkdata.php';
include 'config.php';

$errors = array();
$result = "";
if (!empty($_POST['submit'])) {
    if (empty($_POST['spolocnost_osoba']) || empty($_POST['ulica']) || empty($_POST['mesto']) || empty($_POST['psc']) || empty($_POST['ico']) || empty($_POST['dic']) || empty($_POST['banka']) || empty($_POST['iban'])) {
        array_push($errors, "Nevyplnili ste všetky údaje");
    } else {
        $errors = array();
        $nazovFirmy=$_POST['spolocnost_osoba'];
        $ulica=$_POST['ulica'];
        $mesto=$_POST['mesto'];
        $psc=$_POST['psc'];
        $ico=$_POST['ico'];
        $dic=$_POST['dic'];
        $banka=$_POST['banka'];
        $iban=$_POST['iban'];
        $nazovFirmy = strip_tags($nazovFirmy);
        $ulica = strip_tags($ulica);
        $mesto = strip_tags($mesto);
        $psc = strip_tags($psc);
        $ico = strip_tags($ico);
        $dic = strip_tags($dic);
        $banka = strip_tags($banka);
        $iban = strip_tags($iban);    
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
 
        if(count($errors) == 0) {

            $user = unserialize($_SESSION['loginuser']);
            $user->setNazovFirmy($nazovFirmy);
            $user->setUlica($ulica);
            $user->setMesto($mesto);
            $user->setPsc($psc);
            $user->setIco($ico);
            $user->setDic($dic);
            $user->setBanka($banka);
            $user->setIban($iban);
            $login = $user->getLogin();
            $conn = mysqli_connect($dbhost, $dblogin, $dbpassword);
            $db = mysqli_select_db($conn, $dbname);
            if (!$db) {
                die("Nevybralo databazu");
            }
            $query = mysqli_query($conn, "UPDATE uzivatelia SET subject='$nazovFirmy', ulica='$ulica', mesto='$mesto', psc='$psc', ico='$ico', dic='$dic', banka='$banka', iban='$iban' WHERE login='$login'");
            if (!$query) {
                die("Nevybralo z databazy");
            }
            $_SESSION['loginuser'] = serialize($user);
            $result = "Zmeny boli vykonané";
        } 
        
    }   
}