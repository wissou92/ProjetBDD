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


	 <div  class ="main">
       	 <?php 
				try{    
					$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs'); 
					$bdd->set_charset("utf8");
				}catch (Exception $e){die('Erreur : ' . $e->getMessage());}

	$resultat = $bdd->query("select E.nom_exercice, E.prix_exercice,E.description
		 						 from Programme P, Exercice E  
		 	  				   	 where P.id = E.id_programme 
		 	  				   	 and '$_SESSION[nom]' = E.categorie_exercice;")   
		  	or die('Erreur SQL !<br>'.$sql3.'<br>'.mysqli_error()) ;

		  	$req = $bdd->query("select E.nom_exercice, E.prix_exercice, E.description
		 						 from Programme P, Exercice E  
		 	  				   	 where P.id = E.id_programme 
		 	  				   	 and '$_SESSION[nom]' = E.categorie_exercice ; ")
		  	or die('Erreur SQL !<br>'.$sql3.'<br>'.mysqli_error()) ;


		  	$nb = 0;
		    $i= 0; 
		    echo $_SESSION['nom'];
			 while ($row = mysqli_fetch_array($resultat, MYSQLI_NUM)) { $nb += 1 ; }
		
          if ( $nb != 0 ){
						           $tab[$nb][3]; 

						    while (  ($row1= mysqli_fetch_array($req, MYSQLI_NUM )) &&  $i  <  $nb )
						   {
						 			
						   	  				$tab[$i][0]= $row1[0]; 
						     				$tab[$i][1]= $row1[1];
						      				$tab[$i][2]= $row1[2] ; 

						      				echo '<div><h3>'.$tab[$i][0].'</h3>'.
								 		 		 '<p>Prix: '.$tab[$i][1].'$<p>'.
								 			 	 '<p>Description: '.$tab[$i][2].'/20<p></div>';
								 		 	$i = $i +1 ; 
						   }
    			}
 
			else { echo "hhhhhhhhhh"; }  
			
		   


		 
         ?>
    </div>
	

</body>
</form>
</html>
