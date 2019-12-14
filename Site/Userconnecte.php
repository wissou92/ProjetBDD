<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>
		Programmes Sportifs
	</title>
	
	<link rel="stylesheet" type="text/css"  href="Style_Userconnecte.css">
<div class = "header" > 	
<div id = "np">

<?php 
   session_start();  $nom ;  $prenom; 
try
{    
	$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs'); 
	$bdd->set_charset("utf8");
}
catch (Exception $e)
{   
	die('Erreur : ' . $e->getMessage());
}

$email = $_SESSION[email];
$resultat = $bdd->query("select nom ,prenom from Adherant where Adherant.email = '$email' ; ");
		
	if ($resultat) 
	{
      $row = $resultat->fetch_row();
      $resultat->close();
      $nom= $row[0]; 
      $prenom = $row [1];
    }
     
    printf("Bienvenue %s  %s ",$nom , $prenom);
 ?> 
</div>
<div id= "pro-dec"> 
<form method="post" action="Userconnecte.php">
<input id = "b1" type="submit" value="Se déconnecter" name="deconnect" /> </input>
<input id = "b2" type="submit" value = "Profil" name="Profil" /></input>


 <?php 

 		session_start();

 		// si je vais dans profil  je detruit pas la session 
 		//jaurais besoin des informations 
 		
 		if (isset($_POST['Profil'])&& $_POST['Profil']=='Profil')
		{
				$_SESSION["email"] = $email ; 
				header('location:http://localhost/ProjetBDD/Site/Profil.php');
				exit;
		}

 		if(isset($_POST['deconnect']) && $_POST['deconnect']=='Se déconnecter')
 		{
				session_destroy();
				header('location:accueil.php');
				exit;
		}
?> 

</div>
</div>

</head>


<h1>Programmes Sportifs</h1>

<body>
	

<div  class = "main"> 
	<div>
	<input  id ="btbody" type ="submit" value ="Programmes" > </input>
	</div>

	<div>
	<input id ="btbody" type ="submit" value ="Coaching">  </input>
	</div>

	<div>
	<input id ="btbody"type ="submit" value ="Mes Programmes"></input>
	</div>

	 
	
 </div>

</body>
</form>
</html>
