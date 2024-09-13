<?php
/*
 * -----------------------------------------------------
 *              Test (import du fichier) :
 * -----------------------------------------------------
*/
// Permet de tester si le fichier importé existe et qu'il est différent de NULL
if (isset($_FILES['file'])) {
    // Stocke le chemin et le nom temporaire du fichier importé (ex /tmp/125423.pdf)
    $tmpName = $_FILES['file']['tmp_name'];

    // Stocke le nom du fichier (nom du fichier et son extension importé ex : test.jpg)
    $name = $_FILES['file']['name'];
   
    // La taille du fichier en octets
    $size = $_FILES['file']['size'];
   
    // Stocke les erreurs (problème d'import, de droits, etc...)
    $error = $_FILES['file']['error'];
   
    // Déplace le fichier importé dans le dossier image à la racine du projet
    $fichier = move_uploaded_file($tmpName, "./img/$name");
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Importer une image</title>
    <!-- CSS files -->
    <link rel="stylesheet" href="assets/style/profile.css" />
    <style> 
        label {
            display: block;
            font:
            1rem 'Fira Sans',
            sans-serif;
        }

        input,
        label {
            margin: 0.4rem 0;
        }
    </style>
  </head>
<body>
    <label for="avatar">Choisi une image (png, jpeg):</label>
    
    <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg" />

</body>
</html>
