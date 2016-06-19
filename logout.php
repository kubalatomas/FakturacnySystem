<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if (!empty($_SESSION['loginuser'])) {
    session_destroy();
    header("Location: index.php");
} else {
    header("Location: index.php");
}
