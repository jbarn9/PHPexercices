<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription.PHP</h1>
    <form method="post" action="/poo/mvc/controllers/insertUser.php">
        <input type="hidden" name="form_connexion" value="1">
        <label for="form_name">Nom:</label>
        <input type="text" name="form_name" id="name">
        
        <label for="form_firstname">Prénom:</label>
        <input type="text" name="form_firstname" id="firstname">

        <label for="form_email">Email:</label>
        <input type="text" name="form_email" id="form_email" placeholder="Ex: nom@fournisseur.com">

        <label for="form_password">Mot de passe:</label>
        <input type="password" name="form_password" id="form_password" placeholder="123">
        
        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>