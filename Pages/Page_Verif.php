<?php

//connexion à la base de données
$Connexion = mysqli_connect("localhost","root","","jeuxvideo");

// Rectification du problème d'encodage
$Connexion->set_charset("utf8");

//Verification contenu login et mot de passe

if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['mdp']) && !empty($_POST['mdp'])));