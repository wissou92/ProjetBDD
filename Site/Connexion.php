<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="style_connexion.css">
</head>
<body>
	<form method="post" action="Connexion.php">
		<div class="formulaire">
			<p>Connectez-vous</p>
		</div>
		<div class="formulaire">
			<label for="identifiant">Identifiant :</label>
			<input type="text" id="identifiant" name="id_adherent" required>
		</div>
		<div class="formulaire">
			<label for="mdp">Mot de passe :</label>
			<input type="password" id="mdp" name="mdp_adherent" required>
		</div>
		<div class="formulaire" id="inscription">
			<p><a href="Inscription.php" >Pas encore membre ?</a></p>
		</div>
		<div class="formulaire" id="button">
			<button type="submit" id="envoi">Connexion</button>
		</div>
	</form>
</body>
</html>
