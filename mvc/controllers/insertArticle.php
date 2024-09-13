<?php
include("../models/connect_bdd.php");
include("../views/view_article.php");

if(isset($_POST['nom_article']) && isset($_POST['contenu_article'])){
    $name= $_POST['nom_article'];
    $content = $_POST['contenu_article'];

    include("../models/insertArticle.php");
}else{
    echo '<p>Veuillez remplir les champs.</p>';
}