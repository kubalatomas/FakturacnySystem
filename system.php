<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("user.php");
session_start();
if (empty($_SESSION['loginuser'])) {
    header("Location: index.php");
}
?>

<html>
    <head>
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/system.css"/>
    </head>
    <body>
        <header>
            <div id="hlavicka">
                <span id="logo">
                    FaktúryOnline
                </span>
                <span id="navmenu">
                    <nav>
                        <ul>
                            <li>Domov</li>
                            <li>Nastavenia</li>
                            <li><a href="logout.php">Odhlásiť</a></li>
                        </ul>
                        <div class="cistic"></div>
                    </nav>
                </span>
            </div>
        </header>
        <table>
            <tr>
                <td>Login</td>
                <td><?php echo $_SESSION['loginuser']->getLogin()?></td>
            </tr>
            <tr>
                <td>Heslo</td>
                <td><?php echo $_SESSION['loginuser']->getPassword()?></td>
            </tr>
            <tr>
                <td>Spoločnost/Osoba</td>
                <td><?php echo $_SESSION['loginuser']->getNazovFirmy()?></td>
            </tr>
            <tr>
                <td>Ulica</td>
                <td><?php echo $_SESSION['loginuser']->getUlica()?></td>
            </tr>
            <tr>
                <td>PSČ</td>
                <td><?php echo $_SESSION['loginuser']->getPsc()?></td>
            </tr>
            <tr>
                <td>Štát</td>
                <td><?php echo $_SESSION['loginuser']->getStat()?></td>
            </tr>
            <tr>
                <td>IČO</td>
                <td><?php echo $_SESSION['loginuser']->getICO()?></td>
            </tr>
            <tr>
                <td>DIČ</td>
                <td><?php echo $_SESSION['loginuser']->getDic()?></td>
            </tr>
            <tr>
                <td>Číslo účtu</td>
                <td><?php echo $_SESSION['loginuser']->getCisloUctu()?></td>
            </tr>
            <tr>
                <td>Banka</td>
                <td><?php echo $_SESSION['loginuser']->getBanka()?></td>
            </tr>
            <tr>
                <td>IBAN</td>
                <td><?php echo $_SESSION['loginuser']->getIban()?></td>
            </tr>
            <tr>
                <td>SWIFT</td>
                <td><?php echo $_SESSION['loginuser']->getSwift()?></td>
            </tr>             
        </table>
    </body>
</html>
