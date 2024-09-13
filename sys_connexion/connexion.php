<?php
include("connect.php");

if(!empty($_POST['form_connexion'])){
    $select = $db->prepare("SELECT mdp, email
    FROM utilisateurs WHERE mdp = :mdp AND email = :email");
    $select->bindParam(":mdp", $_POST['form_password']);
    $select->bindParam(":email", $_POST['form_email']);

    $select->execute();
    if($select->rowCount()===1){
        // On affecte les données de notre utilisateur dans notre super globale $_SESSION
        session_start();
        $_SESSION['user'] = $select->fetch(PDO::FETCH_ASSOC);
        header("Location: index.php");
    }else{
        echo "<p style='color:red'> Echec de la connexion </p>";
        unset($_SESSION["user"]);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>connexion.PHP</h1>
    <form method="post">
        <input type="hidden" name="form_connexion" value="1">
        <label for="form_email">Email:</label>
        <input type="text" name="form_email" id="form_email" placeholder="Ex: nom@fournisseur.com">
        <label for="form_password">Mot de passe:</label>
        <input type="password" name="form_password" id="form_password" placeholder="123">
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>