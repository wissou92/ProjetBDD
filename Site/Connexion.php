<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="style_connexion.css">
</head>
<body>
	<form method="post" action="">
		<div class="formulaire">
		<p>Connectez-vous</p>
		</div>
			<div class="formulaire">
			<label for="identifiant">email:</label>
			<input type="email" id="email" name="email_adherent" required>
			</div>
			
			<div class="formulaire">
			<label for="mdp">Mot de passe :</label>
			<input type="password" id="mdp" name="mdp_adherent" required>
			</div>
			
			<div class="formulaire" id="connexion">
			<p><a href="Inscription.php" >Pas encore membre ?</a></p>
			</div>
			
			<div class="formulaire" id="button">
			<input  type="submit" id="envoi"   value = "connexion" name = connexion ></input>
			</div>
	</form>
<?php 
	 session_start(); $email ; $mdp;  
  	
   if( isset($_POST))
   {
   	 if(!empty($_POST['email_adherent']))
   	 	{ 
   	 		$email = $_POST['email_adherent'];
   	 	}

   	 if(!empty($_POST['mdp_adherent']))
   	 	{  
   	 		$mdp = md5($_POST['mdp_adherent']);
   	 	}

    if ($_POST['connexion'] ==  'connexion')
    {
											try
											{    
													$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs');
													$bdd->set_charset("utf8");
													
													$resultat = $bdd -> query ("select email,mdp from Adherant where email = '$email' and mdp = '$mdp' ;");
												
											         // je garde lemail de ladherant 
													 // et la session 
													 // pour recup ses information dans sa propre page  
											         if( mysqli_num_rows($resultat))
											        {
														$_SESSION["email"] = $email ; 
											        	header("Location:Userconnecte.php");
											        	exit;
											        }
											}
											catch (Exception $e){    die('Erreur : ' . $e->getMessage());}

	}}
?>
</body>
</html>
