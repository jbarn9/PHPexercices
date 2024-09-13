<?php
    include('./connect.php');

    if(!empty($_SESSION["user"])) {        
        // Permet de détruire la session PHP courante ainsi que toutes les données rattachées
        session_destroy();
        header("Location: connexion.php");
    }
?>