<?php
include('connect_bdd.php');
session_start();
if(isset($name) && isset($content) && !empty($content)){
    $req = $bdd->prepare("INSERT INTO articles(nom_article, contenu_article) 
    VALUES(:nom_article, :contenu_article)");
    $req->bindParam(":nom_article", $name);
    $req->bindParam(":contenu_article", $content);
    $req->execute();

    // On selectionne le dernier
    $select = $bdd->query("SELECT * FROM articles ORDER BY id_article DESC LIMIT 1");

    // Redirection
    while ($donnees = $select->fetch(PDO::FETCH_ASSOC)) {
        // Affichage des données par les colonnes de la bdd par leurs noms d’attributs respectifs
        echo "<p>Numéro de l'article: ".$donnees["id_article"]."<br> Nom de l'article : ". $donnees["nom_article"] . "<br> Contenu : ". $donnees['contenu_article'] . '</p>';
    } 
}
?>