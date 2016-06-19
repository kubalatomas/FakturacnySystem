<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function overLogin($login) {
    if (strlen($login) < 7) {
        return "Prihlasovacie meno je príliš krátke";
    }
    if (strlen($login) > 20) {
        return "Prihlasovacie meno je príliš dlhé";
    }
}

function overPassword($password) {
    if (strlen($password) < 7) {
        return "Heslo je príliš krátke";
    }
    if (strlen($password) > 20) {
        return "Heslo je príliš dlhé";
    }    
}

function overNazovFirmy($nazovFirmy) {
    if (strlen($nazovFirmy) > 40) {
        return "Spoločnosť/Osoba je príliš dlhé";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($nazovFirmy); $pocet++) {
        if ((ord($nazovFirmy[$pocet]) < 65 || ord($nazovFirmy[$pocet]) > 90) && (ord($nazovFirmy[$pocet]) < 97 || ord($nazovFirmy[$pocet]) > 122) && (ord($nazovFirmy[$pocet]) < 48 || ord($nazovFirmy[$pocet]) > 57) && ord($nazovFirmy[$pocet]) != 40
            && ord($nazovFirmy[$pocet]) != 41 && ord($nazovFirmy[$pocet]) != 45 && ord($nazovFirmy[$pocet]) != 47 && ord($nazovFirmy[$pocet]) != 39 && ord($nazovFirmy[$pocet]) != 38 && ord($nazovFirmy[$pocet]) != 46 && ord($nazovFirmy[$pocet]) != 32 && (ord($nazovFirmy[$pocet]) < 128 || ord($nazovFirmy[$pocet]) > 255)) {
            return "Spoločnosť/Osoba obsahuje neplatné znaky";
        }
    }
}

function overUlicu($ulica) {
    if (strlen($ulica) > 40) {
        return "Názov ulice je príliš dlhý";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($ulica); $pocet++) {
        if ((ord($ulica[$pocet]) < 65 || ord($ulica[$pocet]) > 90) && (ord($ulica[$pocet]) < 97 || ord($ulica[$pocet]) > 122) && (ord($ulica[$pocet]) < 48 || ord($ulica[$pocet]) > 57) && ord($ulica[$pocet]) != 40
            && ord($ulica[$pocet]) != 41 && ord($ulica[$pocet]) != 45 && ord($ulica[$pocet]) != 47 && ord($ulica[$pocet]) != 39 && ord($ulica[$pocet]) != 38 && ord($ulica[$pocet]) != 32 && (ord($ulica[$pocet]) < 128 || ord($ulica[$pocet]) > 255)) {
            return "Ulica obsahuje neplatné znaky";
        }
    }
}

function overMesto($mesto) {
    if (strlen($mesto) > 40) {
        return "Názov mesta je príliš dlhý";
    }
    $pocet = 0;
    for ($pocet; $pocet < strlen($mesto); $pocet++) {
        if ((ord($mesto[$pocet]) < 65 || ord($mesto[$pocet]) > 90) && (ord($mesto[$pocet]) < 97 || ord($mesto[$pocet]) > 122) && (ord($mesto[$pocet]) < 48 || ord($mesto[$pocet]) > 57) && ord($mesto[$pocet]) != 40
            && ord($mesto[$pocet]) != 41 && ord($mesto[$pocet]) != 45 && ord($mesto[$pocet]) != 47 && ord($mesto[$pocet]) != 39 && ord($mesto[$pocet]) != 38 && ord($mesto[$pocet]) != 32 && (ord($mesto[$pocet]) < 128 || ord($mesto[$pocet]) > 255)) {
            return "Mesto obsahuje neplatné znaky";
        }
    }    
}

function overPSC($psc) {
    if (strlen($psc) != 5) {
        return "PSČ musí obsahovať 5 znakov";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($psc); $pocet++) {
        if (ord($psc[$pocet]) < 48 || ord($psc[$pocet]) > 57) {
            return "PSČ obsahuje neplatné znaky";
        }
    }    
}

function overICO($ico) {
    if (strlen($ico) != 8) {
        return "IČO musí obsahovať 8 znakov";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($ico); $pocet++) {
        if (ord($ico[$pocet]) < 48 || ord($ico[$pocet]) > 57) {
            return "PSČ neplatné znaky";
        }
    }    
}

function overDIC($dic) {
    if (strlen($dic) != 10) {
        return "DIČ musí obsahovať 10 znakov";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($dic); $pocet++) {
        if (ord($dic[$pocet]) < 48 || ord($dic[$pocet]) > 57) {
            return "DIČ obsahuje obsahuje neplatné znaky";
        }
    }    
}

function overBanka($banka) {
    if (strlen($banka) > 40) {
        return "Názov banky je príliš dlhý";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($banka); $pocet++) {
        if ((ord($banka[$pocet]) < 65 || ord($banka[$pocet]) > 90) && (ord($banka[$pocet]) < 97 || ord($banka[$pocet]) > 122) && (ord($banka[$pocet]) < 48 || ord($banka[$pocet]) > 57) && ord($banka[$pocet]) != 40
            && ord($banka[$pocet]) != 41 && ord($banka[$pocet]) != 45 && ord($banka[$pocet]) != 47 && ord($banka[$pocet]) != 39 && ord($banka[$pocet]) != 38 && ord($banka[$pocet]) != 46 && ord($banka[$pocet]) != 32 && (ord($banka[$pocet]) < 128 || ord($banka[$pocet]) > 255)) {
            return "Názov banky obsahuje neplatné znaky";
        }
    }
}

function overIBAN($iban) {
    if (strlen($iban) != 24) {
        return "IBAN musí obsahovať 24 znakov";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($iban); $pocet++) {
        if ((ord($iban[$pocet]) < 65 || ord($iban[$pocet]) > 90) && (ord($iban[$pocet]) < 97 || ord($iban[$pocet]) > 122) && (ord($iban[$pocet]) < 48 || ord($iban[$pocet]) > 57 )) {
            return "IBAN obsahuje neplatné znaky";
        }
    }
}

function overCisloFaktury($cislo) {
    $pocet = 0;
    for ($pocet; $pocet < strlen($cislo); $pocet++) {
        if (ord($cislo[$pocet]) < 48 || ord($cislo[$pocet]) > 57) {
            return "Číslo faktúry musí obsahovať číslice";
        }
    }    
}  

function overStat($stat) {
    if (strlen($stat) > 40) {
        return "Spoločnosť/Osoba je príliš dlhé";
    } 
    $pocet = 0;
    for ($pocet; $pocet < strlen($stat); $pocet++) {
        if ((ord($stat[$pocet]) < 65 || ord($stat[$pocet]) > 90) && (ord($stat[$pocet]) < 97 || ord($stat[$pocet]) > 122) && (ord($stat[$pocet]) < 48 || ord($stat[$pocet]) > 57) && ord($stat[$pocet]) != 40
            && ord($stat[$pocet]) != 41 && ord($stat[$pocet]) != 45 && ord($stat[$pocet]) != 47 && ord($stat[$pocet]) != 39 && ord($stat[$pocet]) != 38 && ord($stat[$pocet]) != 32 && (ord($stat[$pocet]) < 128 || ord($stat[$pocet]) > 255)) {
            return "Štát obsahuje neplatné znaky";
        }
    }
}

function overDatum($datum) {
    $format = "d.m.Y";
    if(!DateTime::createFromFormat($format, $datum)) {
        return false;
    } else {
        return true;
    }
}

function overKs($ks) {
    $pocet = 0;
    for ($pocet; $pocet < strlen($ks); $pocet++) {
        if ((ord($ks[$pocet]) < 48 || ord($ks[$pocet]) > 57) && ord($ks[$pocet]) != 46) {
            return false;
        }
    }
    return true;
}

function overSumu($suma) {
    $pocet = 0;
    for ($pocet; $pocet < strlen($suma); $pocet++) {
        if ((ord($suma[$pocet]) < 48 || ord($suma[$pocet]) > 57) && ord($suma[$pocet]) != 46) {
            return false;
        }
    }
    return true;
}