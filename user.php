<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class User {
    private $login;
    private $password;
    private $nazovFirmy;
    private $ulica;
    private $mesto;
    private $psc;
    private $stat;
    private $ico;
    private $dic;
    private $cisloUctu;
    private $banka;
    private $iban;
    private $swift;
    
    
    public function __construct($login, $password, $nazovFirmy, $ulica, $mesto, $psc, $stat, $ico, $cisloUctu, $banka, $iban, $swift, $dic) {
        $this->login = $login;
        $this->password = $password;
        $this->nazovFirmy = $nazovFirmy;
        $this->ulica = $ulica;
        $this->mesto = $mesto;
        $this->psc = $psc;
        $this->stat = $stat;
        $this->ico = $ico;
        $this->dic = $dic;
        $this->cisloUctu = $cisloUctu;
        $this->banka = $banka;
        $this->iban = $iban;
        $this->swift = $swift;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getNazovFirmy() {
        return $this->nazovFirmy;
    }

    function getUlica() {
        return $this->ulica;
    }

    function getMesto() {
        return $this->mesto;
    }

    function getPsc() {
        return $this->psc;
    }

    function getStat() {
        return $this->stat;
    }

    function getIco() {
        return $this->ico;
    }

    function setLogin($login) {
        $this->login = $login;
    }
    function getDic() {
        return $this->dic;
    }

    function getCisloUctu() {
        return $this->cisloUctu;
    }

    function getBanka() {
        return $this->banka;
    }

    function getIban() {
        return $this->iban;
    }

    function getSwift() {
        return $this->swift;
    }

    function setDic($dic) {
        $this->dic = $dic;
    }

    function setCisloUctu($cisloUctu) {
        $this->cisloUctu = $cisloUctu;
    }

    function setBanka($banka) {
        $this->banka = $banka;
    }

    function setIban($iban) {
        $this->iban = $iban;
    }

    function setSwift($swift) {
        $this->swift = $swift;
    }

        function setPassword($password) {
        $this->password = $password;
    }

    function setNazovFirmy($nazovFirmy) {
        $this->nazovFirmy = $nazovFirmy;
    }

    function setUlica($ulica) {
        $this->ulica = $ulica;
    }

    function setMesto($mesto) {
        $this->mesto = $mesto;
    }

    function setPsc($psc) {
        $this->psc = $psc;
    }

    function setStat($stat) {
        $this->stat = $stat;
    }

    function setIco($ico) {
        $this->ico = $ico;
    }



}