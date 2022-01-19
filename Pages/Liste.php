<?php 

//connexion à la base de données
$Connexion = mysqli_connect("localhost","root","","jeuxvideo");

// Rectification du problème d'encodage
$Connexion->set_charset("utf8");

$Nom = $_POST['Nom'];
$Editeur = $_POST['Editeur'];
$Genre = $_POST['Genre'];
$Histoire = $_POST['Histoire'];

echo $Genre;