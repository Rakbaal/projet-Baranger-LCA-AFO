<?php

//connexion à la base de données
$Connexion = mysqli_connect("localhost","root","","jeuxvideo");

// Rectification du problème d'encodage
$Connexion->set_charset("utf8");

//Verification contenu login et mot de passe

if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['mdp']) && !empty($_POST['mdp'])));


//Récupère le login et le mot de passe hashé
$Login = $_POST['login'];
$LoginHash = hash('sha256',$Login);
$MDP = $_POST['mdp'];
$MDPHash = hash('sha256',$MDP);



$Insertion = $Connexion->prepare("INSERT INTO utilisateur(Login, MDP) VALUES (?, ?)");
$Insertion->bind_param('ss',$LoginHash, $MDPHash);

// Récupère tous les logins
$select = mysqli_query($Connexion, "SELECT Login FROM utilisateur WHERE login = '".$_POST['login']."'");


if(mysqli_num_rows($select)) 
	{
		exit('utilisateur déjà existant');
	}
	else
	{
		$Insertion->execute();
		print "Vous avez correctement inscrit. <br /> Retour à la page d'accueil. <br /> ";
		echo '<a href = "Page_Authentification.php"/><button type = "submit" name = "Accueil" onclick = "retourarccueil()">Accueil</button>';
	}
?>
<html>
	<head>
		<title>Page  Verif</title>
		<script language="javascript">
		function retourarccueil(){
			alert("Retour vers la page d'authentification");
		}
		</script>
	</head>
	