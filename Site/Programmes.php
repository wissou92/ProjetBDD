<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>
		Programmes Sportifs
	</title>
	
	<link rel="stylesheet" type="text/css"  href="Style_Programmes.css">
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
<form method="post" action="Programmes.php">
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
	$resultat = $bdd->query
	("select nom, categorie_programme, prix, description, difficulte,avis ,id 
		from Programme ; ");
	$req = $bdd->query
	("select nom, categorie_programme, prix, description, difficulte,avis ,id 
		from Programme ; ");
	$nb =0 ; 
	while ($row = mysqli_fetch_array($req, MYSQLI_NUM)) { $nb += 1 ; }
    $tab[$nb][6];
	
	for ($it = 0 ; $it< $nb ; $it++)
	{
    
      $row = mysqli_fetch_array($resultat, MYSQLI_NUM);
   	  $tab[$it][0]= $row[0]; 
      $tab[$it][1]= $row [1];
      $tab[$it][2]= $row[2]; 
      $tab[$it][3]= $row[3]; 
      $tab[$it][4]= $row[4];
      $tab[$it][6]= $row[6];
    }

 ?> 

  <div  class ="main">
       
   <?php
            $i= 0 ; 
            while ($i < 5)
            { 
            		echo '<div>
            		<input    id = "bt" value="En savoir plus"  type = "submit"  name = "prog'.$i.'" >
	 				<input    id = "bt" value="Acheter"  type = "submit"  name = "Acheter'.$i.'" >'.
	 	           '<h3>'.$tab[0][0].'</h3>
			        <p>Catégorie: '.$tab[0][1].'</p><p>Prix: '.$tab[0][2].'$</p>
			        <p>Difficulté: '.$tab[0][4].'/20<p><p>'.$tab[0][3].'</p></div>';
			        $i++;	

            }

         
         for ( $i= 0; $i< $nb ; $i++){
            if ( $_POST['prog'.$i]=='En savoir plus')
		{
			$_SESSION['nom']= $tab[$i][1]; 
			$_SESSION['email'] = $email; 
			header('location:http://localhost/ProjetBDD/Site/Exercice.php');
			exit;
		}
		
		if ($_POST['Acheter'.$i]=='Acheter')
		{
		
				   try{    
						$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs'); 
						$bdd->set_charset("utf8");
					}catch (Exception $e){  die('Erreur : ' . $e->getMessage());}
			
				$id = $tab[$i][6]; 
				$verif = $bdd -> query ("select P.id_programme 
				from Pratique P   
				where '$email' = P.email_adherent and $id  = id_programme;");
			
			if( mysqli_num_rows($verif) == 0)
			{
			
				$req = $bdd->query("select CURRENT_DATE() ;") or die('sql erreur');
				$row = $req->fetch_row();
			  	$resultat = 
			 	$bdd->query( "INSERT INTO Pratique (date_debut , email_adherent , id_programme ) 
				VALUES( '$row[0]' , '$_SESSION[email]' , $id); "); 
			   
			  }
			  else{

			  	echo 'vous avez deja ce Programme';
			  }
			 }
		   
		}

       ?>


	

    
</form>
</body>

</html>
