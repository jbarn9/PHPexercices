<?php
    $DB_NAME = "bdd_php_exercices";
    $DB_USER = "root";
    $DB_PASS = "root"; 

    try{
        $bdd = new PDO("mysql:host=localhost;dbname=".$DB_NAME, $DB_USER, $DB_PASS); 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e) {
        // Affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
