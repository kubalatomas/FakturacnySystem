<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$errors = array();


include 'checkdata.php';
include 'config.php';
include 'faktura.php';
include 'polozka.php';
if (!empty($_POST['submit'])) {
    if (empty($_POST['faktura_cislo']) || empty($_POST['spolocnost_osoba']) || empty($_POST['ulica']) || empty($_POST['mesto']) || empty($_POST['psc']) || empty($_POST['stat']) || 
        empty($_POST['datum_vystavenia']) || empty($_POST['datum_splatnosti']) || empty($_POST['znenie_faktury']) || empty($_POST['nazov']) || empty($_POST['mj']) 
        || empty($_POST['ks']) || empty($_POST['suma'])) {
        
        array_push($errors, "Nevyplnili ste všetky údaje");
    } else {

        $errors = array();
        $faktura_cislo=$_POST['faktura_cislo'];
        $spolocnost_osoba=$_POST['spolocnost_osoba'];
        $ulica=$_POST['ulica'];
        $mesto=$_POST['mesto'];
        $psc=$_POST['psc'];
        $stat=$_POST['stat'];
        $datum_vystavenia=$_POST['datum_vystavenia'];
        $datum_splatnosti=$_POST['datum_splatnosti'];
        $znenie_faktury=$_POST['znenie_faktury'];
        $faktura_cislo = strip_tags($faktura_cislo);
        $spolocnost_osoba = strip_tags($spolocnost_osoba);
        $ulica = strip_tags($ulica);
        $mesto = strip_tags($mesto);
        $psc = strip_tags($psc);
        $stat = strip_tags($stat);
        $datum_vystavenia = strip_tags($datum_vystavenia);
        $datum_splatnosti = strip_tags($datum_splatnosti);
        $znenie_faktury = strip_tags($znenie_faktury);
               
        if (overCisloFaktury($faktura_cislo) != null) {
            array_push($errors, overCisloFaktury($faktura_cislo));
        }     
        if (overNazovFirmy($spolocnost_osoba) != null) {
            array_push($errors, overNazovFirmy($spolocnost_osoba));
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
        if (overStat($stat) != null) {
            array_push($errors, overStat($stat));
        }
        
        if(!overDatum($datum_vystavenia)) {
            array_push($errors, "Zadaný nesprávny formát dátumu vystavenia");
        }
 
        if(!overDatum($datum_splatnosti)) {
            array_push($errors, "Zadaný nesprávny formát dátumu splatnosti");
        }
        
        if(count($errors) == 0) {
            $nazov = $_POST['nazov'];
            $mj = $_POST['mj'];
            $ks = $_POST['ks'];
            $suma = $_POST['suma'];
            
            $indexpom = 0;
            $resultpom = false;
            for ($indexpom; $indexpom < count($nazov); $indexpom++) {
                if(!overKs($ks[$indexpom]) || !overSumu($suma[$indexpom])) {
                    $resultpom = true;
                    break;
                }
            }
            
            if (in_array("", $nazov) || in_array("", $mj) || in_array("", $ks) || in_array("", $suma)) {
                array_push($errors, "Nevyplnili ste všetky potrebné informácie k položkám faktúry");
            } else if ($resultpom) {
                array_push($errors, "Počet kusov alebo suma položky obsahujú neplatné znaky");
            } else {
                $user = unserialize($_SESSION['loginuser']);
                $idUzivatela = $user->getId();
                // pripojenie databazy
                $conn = mysqli_connect($dbhost, $dblogin, $dbpassword);

                if (!$conn) {
                    die("Nepripojilo databazu");
                }

                $db = mysqli_select_db($conn, $dbname);

                if (!$db) {
                    die("Nevybralo databazu");
                }

                $sql = "INSERT INTO faktury (id_uzivatela, subject, ulica, mesto, psc, stat, znenie, cislo, datum_vystavenia, datum_splatnosti) VALUES ('$idUzivatela','$spolocnost_osoba','$ulica','$mesto','$psc','$stat','$znenie_faktury','$faktura_cislo','$datum_vystavenia','$datum_splatnosti')";

                $query = mysqli_query($conn, $sql);
                if (!$query) {
                    die("Nevlozilo fakturu");
                }

                $sql = "SELECT id, id_uzivatela FROM faktury WHERE id_uzivatela='$idUzivatela' ORDER BY id DESC LIMIT 1";

                $query = mysqli_query($conn, $sql);
                if (!$query) {
                    die("Nevybralo z databazy");
                }

                $pole = mysqli_fetch_assoc($query);
                $id_faktury = $pole['id'];
                $i = 0;
                for ($i; $i < count($nazov); $i++) {
                    $nazov_sql = $nazov[$i];
                    $mj_sql = $mj[$i];
                    $ks_sql = $ks[$i];
                    $suma_sql = $suma[$i];

                    $sql = "INSERT INTO polozky (nazov_polozky, merna_jednotka, pocet_ks, suma, id_faktury) VALUES ('$nazov_sql','$mj_sql','$ks_sql','$suma_sql','$id_faktury')";
                    $query = mysqli_query($conn, $sql);
                    if (!$query) {
                        die("Nevlozilo polozku");
                    }
                    
                }
                mysqli_close($conn);
                header("Location: system.php?menu=evidencia&m=a");
                
                
            }
        
        
            //SELECT fields FROM table ORDER BY id DESC LIMIT 1
//            SELECT @last_id := MAX(id) FROM table;
//
//SELECT * FROM table WHERE id = @last_id;
            //$sql = "INSERT INTO faktury (id_uzivatela, subject, ulica, mesto, psc, stat, znenie, cislo, datum_vystavenia, datum_splatnosti) VALUES ('$login', '$password', '$nazovFirmy', '$ulica', '$mesto', '$psc', '$stat', '$ico', '$dic', '$banka', '$iban')";
        }
    }
} 
