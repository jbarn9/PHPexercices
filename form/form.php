<?php 
include('connect_bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercices PHP BDD</title>
</head>
<body>
    <form method="POST" >
      <label>Nom article</label>  
      <input name="nom_article" type="text"/>
      <br>
      <label>Contenu de l'article</label>  
      <input name="contenu_article" type="text"/>
      <input type="submit"/>
    </form>
    <?php
    if(!empty($_POST)){
      while ($donnees = $select->fetch(PDO::FETCH_ASSOC)) {
        // Affichage des données par les colonnes de la bdd par leurs noms d’attributs respectifs
        echo "<p> Nom de l'article : ". $donnees['nom_article'] . "<br> Contenu : ". $donnees['contenu_article'] . '</p>';
      } 
    }
    ?>
</body>