<?php
session_start();
if(isset($_POST['nom_article']) && isset($_POST['contenu_article']) && !empty($_POST['contenu_article'])){
    $name = $_POST['nom_article'];
    $content = $_POST['contenu_article'];
    $DB_NAME = "bdd_php_exercices";
    $DB_USER = "root";
    $DB_PASS = "root"; 

    try{
        // var_dump("INSERT INTO articles(nom_article, contenu_article) VALUES ($name, $content)");
        $bdd = new PDO("mysql:host=localhost;dbname=".$DB_NAME, $DB_USER, $DB_PASS); 
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $req = $bdd->query("INSERT INTO articles(nom_article, contenu_article) 
        // VALUES ('".$name."','". $content."')");
        $req = $bdd->prepare("INSERT INTO articles(nom_article, contenu_article) 
        VALUES(:nom_article, :contenu_article)");
        $req->bindParam(":nom_article", $name);
        $req->bindParam(":contenu_article", $content);
        $req->execute();

        $select = $bdd->query("SELECT * FROM articles ORDER BY id_article DESC LIMIT 1");
        
    
    }catch(Exception $e) {
        // Affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }

    

}