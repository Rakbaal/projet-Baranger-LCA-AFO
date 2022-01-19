<?php 
//connexion à la base de données
$Connexion = mysqli_connect("localhost","root","","jeuxvideo");

// Rectification du problème d'encodage
$Connexion->set_charset("utf8");

//Reception du login et du mot de passe

$Login = $Connexion->real_escape_string($_POST["login"]);
$LoginHash = hash('sha256',$Login);
$mdp = $_POST["mdp"];
$mdpHash = hash('sha256',$mdp);

//Ordre SQL

$OrdreSQL = "SELECT * FROM utilisateur WHERE Login ='".$LoginHash."' AND MDP ='".$mdpHash."'";

//Execution de l'ordre

$Resultat = $Connexion->query($OrdreSQL);

	if (mysqli_num_rows($Resultat) == 0)
	{
		echo "echec connexion <br />";
	}
	else
	{
		while ($Tableau = $Resultat->fetch_assoc())
			{
				//Affichage de la réussite de la connexion
				echo '<tr><td> Bonjour '.$Login."</td></tr><br />";
				
				//Affichage des options possible une fois connecté
				echo '<tr><td><a href = CreationJeu.php><input type = "submit" name = "Ajout" value ="Ajouter un jeu à la liste"></a>
				</td><br />
				<td>Noter un jeu existant</td></tr><br /><td>Voir la liste des jeux</td>';
				
			}
	}
?>
