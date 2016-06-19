<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Polozka {
    private $id;
    private $nazov;
    private $mj;
    private $pocet;
    private $sumaBezDph;
    private $idFaktury;
    
    function __construct($id, $nazov, $mj, $pocet, $sumaBezDph, $idFaktury) {
        $this->id = $id;
        $this->nazov = $nazov;
        $this->mj = $mj;
        $this->pocet = $pocet;
        $this->sumaBezDph = $sumaBezDph;
        $this->idFaktury = $idFaktury;
    }

    function getNazov() {
        return $this->nazov;
    }

    function getMj() {
        return $this->mj;
    }

    function getPocet() {
        return $this->pocet;
    }



    function getIdFaktury() {
        return $this->idFaktury;
    }

    function getId() {
        return $this->id;
    }
    
    function getSumaBezDph() {
        return $this->sumaBezDph;
    }
    function getDph() {
        return $this->getSumaBezDph() / 5;
    }
    
    function getSumaDph() {
        return $this->getSumaBezDph() + $this->getDph();       
    }
    
    function getCelkovaSumaBezDph() {
        return $this->getPocet() * $this->getSumaBezDph();
    }
    
    function getCelkoveDph() {
        return $this->getPocet() * $this->getDph();
    }
    
    function getCelkovaSumaDph() {
        return $this->getPocet() * $this->getSumaDph();
    }
    
    function getPocetString() {
        return $this->getPocet()." ".$this->getMj();
    }
    
    function getSumaBezDphString() {
        return $this->getSumaBezDph()." €";
    }
    
    function getCelkovaSumaBezDphString() {
        return $this->getCelkovaSumaBezDph()." €";
    }
    
    function getCelkoveDphString() {
        return $this->getCelkoveDph()." €";
    }
    
    function getCelkovaSumaDphString() {
        return $this->getCelkovaSumaDph()." €";
    }
}