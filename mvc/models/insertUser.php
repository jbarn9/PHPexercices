<?php
include('connect_bdd.php');

if(isset($name, $firstname, $password,$email) && !empty($name)
&& !empty($firstname) && !empty($password) && !empty($email)){

    $req = $bdd->prepare("INSERT INTO utilisateurs(pseudo, nom, email, mdp) 
    VALUES(:pseudo, :nom, :email, :mdp)");
    $req->bindParam(":pseudo", $firstname);
    $req->bindParam(":nom", $name);
    $req->bindParam(":email", $email);
    $req->bindParam(":mdp", $password);
    $req->execute();

    // On selectionne le dernier
    $select = $bdd->query("SELECT * FROM utilisateurs ORDER BY id_utilisateur DESC LIMIT 1");

    // Redirection
    while ($donnees = $select->fetch(PDO::FETCH_ASSOC)) {
        // Affichage des données par les colonnes de la bdd par leurs noms d’attributs respectifs
        echo "<p> Vous êtes bien inscrits. <a href='connexion.php'>Se connecter</a></p>";
    } 
}
?>