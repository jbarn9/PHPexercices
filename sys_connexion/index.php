<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>index.PHP</h1>
    <?= "Bonjour utilisateur ayant l'email ".$_SESSION['user']['email']." !"; ?>
    <p><a href="deconnexion.php">Se déconnecter</a></p>
</body>
</html>