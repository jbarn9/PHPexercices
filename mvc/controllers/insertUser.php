<?php
include("../models/connect_bdd.php");
include("../views/inscription.php");

if(isset($_POST['form_name'], $_POST['form_firstname'], $_POST['form_email'], $_POST['form_password']) && !empty($_POST['form_name'])
&& !empty($_POST['form_firstname']) && !empty($_POST['form_email']) && !empty($_POST['form_password'])){

    $name= $_POST['form_name'];
    $firstname = $_POST['form_firstname'];
    $email = $_POST['form_email'];
    $password = $_POST['form_password'];

    include("../models/insertUser.php");
}else{
    echo '<p style="color:red">Veuillez remplir tous les champs.</p>';
}