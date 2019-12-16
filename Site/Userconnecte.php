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
	<input  id ="btbody" type ="submit" value ="Programmes" name="Programmes" > </input>
	 <?php
	 	     if(isset($_POST['Programmes']) && $_POST['Programmes'] =='Programmes')
	 	     {
	 	     	$_SESSION["email"] = $email ; 
				header('location:http://localhost/ProjetBDD/Site/Programmes.php');
				exit;
	 	     }
	 ?>
	</div>

	<div>
	<input id ="btbody" type ="submit" value ="Coaching" name ="Coaching">  </input>

	<?php
	 	     if(isset($_POST['Coaching']) && $_POST['Coaching'] =='Coaching')
	 	     {
	 	     	$_SESSION["email"] = $email ; 
				header('location:http://localhost/ProjetBDD/Site/Coaching.php');
				exit;
	 	     }
	 ?>
	</div>

	<div>
	<input id ="btbody"type ="submit" value ="Mes Programmes" name="MesProg"></input>
			<?php
	 	     if(isset($_POST['MesProg']) && $_POST['MesProg'] =='Mes Programmes')
	 	     {
	 	     	$_SESSION["email"] = $email ; 
				header('location:http://localhost/ProjetBDD/Site/MesProgrammes.php');
				exit;
	 	     }
	 ?>
	</div>

	 
	
 </div>

</body>
</form>
</html>
