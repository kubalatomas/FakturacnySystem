<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
include 'faktura.php';
include 'polozka.php';

$message = "";

$user = unserialize($_SESSION['loginuser']);
$idUzivatela = $user->getId();

$faktury = array();
$conn = mysqli_connect($dbhost, $dblogin, $dbpassword);

if (!$conn) {
    die("Nepripojilo databazu");
}

$db = mysqli_select_db($conn, $dbname);

if (!$db) {
    die("Nevybralo databazu");
}

$sql = "SELECT * FROM faktury WHERE id_uzivatela='$idUzivatela'";
$query = mysqli_query($conn, $sql);
if (!$query) {
    die("Nevybralo");
}
$pole = array();
while($riadok = mysqli_fetch_array($query)) {
    array_push($pole, $riadok);
}

for ($i = 0; $i < count($pole); $i++) {
    $f = new Faktura($pole[$i]['subject'], $pole[$i]['ulica'], $pole[$i]['mesto'], $pole[$i]['psc'], $pole[$i]['stat'], $pole[$i]['cislo'], $pole[$i]['datum_vystavenia'], $pole[$i]['datum_splatnosti'], $pole[$i]['znenie'], $pole[$i]['id'], $pole[$i]['id_uzivatela']);
    $idFaktury = $f->getId();
    $sql = "SELECT * FROM polozky WHERE id_faktury='$idFaktury'";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        die("Nevybralo");
    }
    $polozky = array();
    while ($riadok = mysqli_fetch_array($query)) {
        array_push($polozky, $riadok);
    }

    
    for ($j = 0; $j < count($polozky); $j++) {
        $polozka_pom = new Polozka($polozky[$j]['id'], $polozky[$j]['nazov_polozky'], $polozky[$j]['merna_jednotka'], $polozky[$j]['pocet_ks'], $polozky[$j]['suma'], $polozky[$j]['id_faktury']);
        $f->addPolozky($polozka_pom);
    }
    array_push($faktury, $f);
}
mysqli_close($conn);
?>
        <?php 
        if (isset($_GET['action'])) {
            if ($_GET['action'] == 'show') {
                if(isset($_GET['id'])) {
                    $id = $_GET['id'];
                    
                    if ($faktury[$id] === null) {
                        
                        header("Location: system.php?menu=evidencia");
                    } else {
                        $show_faktura = $faktury[$id];
                        include 'ukaz.php';
                    }
                    
                }
            } else if($_GET['action'] == 'delete') {
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    if ($faktury[$id] === null) {                        
                        header("Location: system.php?menu=evidencia");
                    } 
                    $id_faktury = $faktury[$id]->getId();
                    $conn = mysqli_connect($dbhost, $dblogin, $dbpassword);

                    if (!$conn) {
                        die("Nepripojilo databazu");
                    }

                    $db = mysqli_select_db($conn, $dbname);

                    if (!$db) {
                        die("Nevybralo databazu");
                    }
                    
                    $sql = "DELETE FROM polozky WHERE id_faktury='$id_faktury'";
                    $query = mysqli_query($conn, $sql);
                    if (!$query) {
                        die("Nevymazalo");
                    }
                    
                    $sql = "DELETE FROM faktury WHERE id='$id_faktury'";
                    $query = mysqli_query($conn, $sql);
                    if (!$query) {
                        die("Nevymazalo");
                    }
                    mysqli_close($conn);
                    $message = "Faktúra bola vymazaná";
                    header("Location: system.php?menu=evidencia&m=r");
                }
            } else if ($_GET['m'] == 'r') {
                $message = "Faktúra bola úspešne vymazaná";
                include 'evidencia_table.php';
            }
        } else if (isset($_GET['m'])) {
            if ($_GET['m'] == 'r') {
                $message = "Faktúra bola úspešne vymazaná";
                include 'evidencia_table.php';
            } else if ($_GET['m'] == 'a') {
                $message = "Faktúra bola úspešne pridaná do evidencie";
                include 'evidencia_table.php';                
            }
        } else {
            include 'evidencia_table.php';
        }

