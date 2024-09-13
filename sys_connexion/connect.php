<?php
    // Cette fonction sert à démarrer une session PHP (que vous pouvez notamment retrouver dans vos cookies)
    // Nous nous en servirons un petit peu plus tard
    session_start();
    $server = 'localhost';
    $dbname = 'bdd_php_exercices';
    $user = 'root';
    $pass = 'root';
    try {
        $db = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        $db = NULL;
        echo ("Erreur: " . $e->getMessage());
    }
?>
