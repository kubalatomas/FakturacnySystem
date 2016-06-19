<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Faktura {
    private $spolocnost;
    private $ulica;
    private $mesto;
    private $psc;
    private $stat;
    private $cisloFaktury;
    private $datumVystavenia;
    private $datumSplatnosti;
    private $polozkyFaktury;
    private $znenieFaktury;
    private $id;
    private $idUzivatela;
    
    function __construct($spolocnost, $ulica, $mesto, $psc, $stat, $cisloFaktury, $datumVystavenia, $datumSplatnosti, $znenieFaktury, $id, $idUzivatela) {
        $this->spolocnost = $spolocnost;
        $this->ulica = $ulica;
        $this->mesto = $mesto;
        $this->psc = $psc;
        $this->stat = $stat;
        $this->cisloFaktury = $cisloFaktury;
        $this->datumVystavenia = $datumVystavenia;
        $this->datumSplatnosti = $datumSplatnosti;
        $this->polozkyFaktury = array();
        $this->znenieFaktury = $znenieFaktury;
        $this->id = $id;    
        $this->idUzivatela = $idUzivatela;
    }
    
    function getSpolocnost() {
        return $this->spolocnost;
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

    function getCisloFaktury() {
        return $this->cisloFaktury;
    }

    function getDatumVystavenia() {
        return $this->datumVystavenia;
    }


    function getDatumSplatnosti() {
        return $this->datumSplatnosti;
    }


    function getZnenieFaktury() {
        return $this->znenieFaktury;
    }

    function setSpolocnost($spolocnost) {
        $this->spolocnost = $spolocnost;
    }

    function setUlica($ulica) {
        $this->ulica = $ulica;
    }

    function setMesto($mesto) {
        $this->mesto = $mesto;
    }
    function getPolozkyFaktury() {
        return $this->polozkyFaktury;
    }

    function setPsc($psc) {
        $this->psc = $psc;
    }

    function setStat($stat) {
        $this->stat = $stat;
    }

    function setCisloFaktury($cisloFaktury) {
        $this->cisloFaktury = $cisloFaktury;
    }

    function setDatumVystavenia($datumVystavenia) {
        $this->datumVystavenia = $datumVystavenia;
    }

    function setDatumSplatnosti($datumSplatnosti) {
        $this->datumSplatnosti = $datumSplatnosti;
    }

    function setZnenieFaktury($znenieFaktury) {
        $this->znenieFaktury = $znenieFaktury;
    }
    function getId() {
        return $this->id;
    }

    function getIdUzivatela() {
        return $this->idUzivatela;
    }

    function getCelkovaSumaBezDph() {
        $suma = 0;
        foreach ($this->polozkyFaktury as $p) {
            $suma += $p->getCelkovaSumaBezDph();
        }
        return $suma;
    }
    
    function getCelkovaSumaBezDphString() {
        return $this->getCelkovaSumaBezDph()." €";
    }

    function getCelkoveDph() {
        $suma = 0;
        foreach ($this->polozkyFaktury as $p) {
            $suma += $p->getCelkoveDph();
        }
        return $suma;
    }
    
    function getCelkoveDphString() {
        return $this->getCelkoveDph()." €";
    }
    
    function getCelkovaSumaDph() {
        $suma = 0;
        foreach ($this->polozkyFaktury as $p) {
            $suma += $p->getCelkovaSumaDph();
        }
        return $suma;
    }
    
    function getCelkovaSumaDphString() {
        return $this->getCelkovaSumaDph()." €";
    }
    
    function addPolozky($polozka) {
        array_push($this->polozkyFaktury, $polozka);
    }    
}
