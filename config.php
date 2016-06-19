<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbhost = "localhost";
$dblogin = "skfaktury";
$dbpassword = "testing";

$dbname = "skfaktury";


// sql create table
// CREATE TABLE `skfaktury`.`uzivatelia` ( `id` INT NOT NULL AUTO_INCREMENT , `login` VARCHAR(20) NOT NULL , `password` VARCHAR(255) NOT NULL , `subject` VARCHAR(255) NOT NULL , `ulica` VARCHAR(255) NOT NULL , `mesto` VARCHAR(255) NOT NULL , `psc` VARCHAR(5) NOT NULL , `stat` VARCHAR(255) NOT NULL , `ico` VARCHAR(8) NOT NULL , `dic` VARCHAR(10) NOT NULL , `banka` VARCHAR(255) NOT NULL , `iban` VARCHAR(24) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

//CREATE TABLE `skfaktury`.`faktury` ( `id` INT UNSIGNED NULL , `id_uzivatela` INT NOT NULL , `subject` VARCHAR(255) NOT NULL , `ulica` VARCHAR(255) NOT NULL , `mesto` VARCHAR(255) NOT NULL , `psc` VARCHAR(255) NOT NULL , `stat` VARCHAR(255) NOT NULL , `znenie` VARCHAR(255) NOT NULL , `cislo` VARCHAR(255) NOT NULL , `datum_vystavenia` VARCHAR(30) NOT NULL , `datum_splatnosti` VARCHAR(30) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

//CREATE TABLE `faktury_online`.`polozky` ( `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `nazov_polozky` VARCHAR(255) NOT NULL , `merna_jednotka` VARCHAR(255) NOT NULL , `pocet_ks` INT UNSIGNED NOT NULL , `suma` DOUBLE UNSIGNED NOT NULL , `id_faktury` INT UNSIGNED NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;