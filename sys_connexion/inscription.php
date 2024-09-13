<?php
include("connect.php");

if(!empty($_POST['form_inscription'])){
    $select = $db->prepare("SELECT pseudo, mdp, nom, email
    FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp AND nom = :nom AND email = :email");
    $select->bindParam(":pseudo", $_POST['form_pseudo']);
    $select->bindParam(":mdp", $_POST['form_password']);
    $select->bindParam(":nom", $_POST['form_name']);
    $select->bindParam(":email", $_POST['form_email']);
    $select->execute();

    if(empty($select->fetch(PDO::FETCH_COLUMN))){
        $insert = $db->prepare("INSERT INTO utilisateurs(pseudo,mdp,nom, email)
        VALUES(:pseudo, :mdp, :nom, :email)");
        $insert->bindParam(":pseudo", $_POST['form_pseudo']);
        $insert->bindParam(":mdp", $_POST['form_password']);
        $insert->bindParam(":nom", $_POST['form_name']);
        $insert->bindParam(":email", $_POST['form_email']);

        $insert->execute();    
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>inscription.PHP</h1>
    <form method="post">
        <input type="hidden" name="form_inscription" value="1">
        <label for="form_name">Nom d'utilisateur:</label>
        <input type="text" name="form_name" placeholder="mon nom">
        <label for="form_pseudo">Pseudo:</label>
        <input type="text" name="form_pseudo" placeholder="helloworld">
        <label for="form_email">Email:</label>
        <input type="email" name="form_email" placeholder="Ex: nomprenom@fournisseur.com">
        <label for="form_password">Mot de passe:</label>
        <input type="password" name="form_password" placeholder="1234">
        <input type="submit" value="S'inscrire">
    </form>
    <?php
        if(!empty($_POST)){
            if(isset($insert) && $insert->execute()){
                echo "<p stye='color:green'> Inscription réussie ! <a href='connexion.php'>Se connecter</a></p>";
            }else {
                echo "<p style='color:red'> Echec de l'inscription </p>";
            }
        }
    ?>
</body>
</html>