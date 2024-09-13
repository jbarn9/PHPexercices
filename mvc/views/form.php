<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercices PHP MVC</title>
</head>
<body>
    <form method="POST" action="/poo/mvc/controllers/insertArticle.php">
      <label>Nom article</label>  
      <input name="nom_article" type="text"/>
      <br>
      <label>Contenu de l'article</label>  
      <input name="contenu_article" type="text"/>
      <input type="submit"/>
    </form>
    
</body>