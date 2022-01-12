<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
	</head>

    <form action="Login.php" method = "POST">
        <p> Login <input type="username" id="login" name="login"><br /></p>
        <p> Mot de passe <input type="password" id="mdp" name="mdp"><br></p>
        <button type = "submit" name = "Envoyer">Envoyer</button>
		<button type = "reset" name = "Annuler">Annuler</button>
    </form>
		<a href = 'inscription.php'/><button name = "inscription">S'inscrire</button>
</html>