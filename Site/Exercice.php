<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>
		Programmes Sportifs
	</title>
	<link rel="stylesheet" type="text/css"  href="Style_Programmes.css">
 	

<form method="post" action="Userconnecte.php">


</head>


<h1>Programmes Sportifs</h1>

<body>


	 <div  class ="main">
       	 <?php 
       	 session_start();
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
		    $_SESSION['nom'];
			 while ($row = mysqli_fetch_array($resultat, MYSQLI_NUM)) { $nb += 1 ; }
		
          if ( $nb != 0 ){
						    $tab[$nb][3]; 
						    while (  ($row1= mysqli_fetch_array($req, MYSQLI_NUM )) &&  $i  <  $nb ){
						 			
						   	  				$tab[$i][0]= $row1[0]; 
						     				$tab[$i][1]= $row1[1];
						      				$tab[$i][2]= $row1[2] ; 

						      				echo '<div><h3>'.$tab[$i][0].'</h3>'.
								 		 		 '<p>Prix: '.$tab[$i][1].'$<p>'.
								 			 	 '<p>Description: '.$tab[$i][2].'/20<p></div>';
								 		 	$i = $i +1 ; 
						   }
						}
			else { echo 'ce Programme ne contient aucun excercie pour le moment'; }  
			
		   


		 
         ?>
    </div>
	

</body>
</form>
</html>
