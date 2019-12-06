<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="style_inscription.css">
</head>
<body>
	<form method="post" action="Inscription.php">
		<div class="formulaire">
			<p>Inscrivez-vous</p>
		</div>
		<div class="formulaire">
			<label for="prenom">Prénom :</label>
			<input type="text" id="prenom" name="prenom_adherent" required>
			
		</div>
		<div class="formulaire">
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom_adherent" required>
		</div>
		<div class="formulaire">
			<label for="email">E-mail :</label>
			<input type="email" id="email" name="email_adherent" required>
		</div>
		<div class="formulaire">
			<label for="identifiant">Identifiant :</label>
			<input type="text" id="identifiant" name="id_adherent" required>
		</div>
		<div class="formulaire">
			<label for="mdp">Mot de passe :</label>
			<input type="password" id="mdp" name="mdp_adherent" required>
		</div>
		<div class="formulaire" id="button">
			<button type="submit" id="envoi">Inscription</button>
		</div>
	</form>
</body>
</html>