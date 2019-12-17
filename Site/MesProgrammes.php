<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>
		Programmes Sportifs
	</title>
	
	<link rel="stylesheet" type="text/css"  href="Style_Programmes.css">
	
</head>
<form method="post" action="#">
<h1>Programmes Sportifs</h1>

<body>


	<div>
<?php 
 try{    
		$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs'); 
		$bdd->set_charset("utf8");
	}
	catch (Exception $e){die('Erreur : ' . $e->getMessage());}


?>

	</div>

    <div  class ="main">
       	 <?php 
       	 session_start();
       	 $email = $_SESSION['email']; 
				try{    
					$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs'); 
					$bdd->set_charset("utf8");
				}catch (Exception $e){die('Erreur : ' . $e->getMessage());}

		  	$resultat = $bdd->query("select P.nom, P.categorie_programme, P.prix, P.description, P.difficulte, P.avis 
		 						 from Programme P, Pratique  
		 	  				   	 where P.id = Pratique.id_programme 
		 	  				   	 and '$email' = Pratique.email_adherent ; ")   or die('Erreur SQL !<br>'.$sql3.'<br>'.mysqli_error()) ;

		  	$req = $bdd->query("select P.nom, P.categorie_programme, P.prix, P.description, P.difficulte, P.avis,P.id
		 						 from Programme P, Pratique  
		 	  				   	 where P.id = Pratique.id_programme 
		 	  				   	 and '$email' = Pratique.email_adherent ; ")   or die('Erreur SQL !<br>'.$sql3.'<br>'.mysqli_error()) ;
			$nb = 0; 
			$i= 0; 
			 

			 while ($row = mysqli_fetch_array($resultat, MYSQLI_NUM)) { $nb += 1 ; }
		
          if ( $nb != 0 ){
						      $tab[$nb][5];   
			while (  ($row1= mysqli_fetch_array($req, MYSQLI_NUM )) &&  $i  <  $nb ){
						 			
						   	  				$tab[$i][0]= $row1[0]; 
						     				$tab[$i][1]= $row1[1];
						      				$tab[$i][2]= $row1[2] ; 
						     				$tab[$i][3]= $row1[3]; 
						      				$tab[$i][4]= $row1[4];
						      				$tab[$i][6]= $row1[6];
						      				
						      				 echo '<div>
						      				 <input    id = "bt" value="En savoir plus"  type = "submit"  name = "prog'.$i.'" >
						      				 <h3>'.$tab[$i][0].'</h3>'.
								 			 	  '<p>Catégorie: '.$tab[$i][1].'</p>'.
								 		 		  '<p>Prix: '.$tab[$i][2].'$<p>'.
								 			 	  '<p>Difficulté: '.$tab[$i][4].'/20</p>'.
								 			 	  '<p>'.$tab[$i][3].'</p>'.
								 			 	  '<br></br>'.
											'<input type="submit" id="bt" name="terminer'.$i.'" value="terminer" required>'.
												  '</div>';
								 	
								 		 	$i = $i +1 ;}
				 }
			else { echo '<div> <p>vous  avez '.$nb.'Programmes<p><div>'; }  
		 for ($i = 0 ; $i<$nb ; $i++ ){

			if ($_POST['terminer'.$i]== 'terminer'){				
 				echo '<div>
  			  <label for="date">Sélectionner date :</label>
    		  <input type="date" id="date" name="date" min="2020-18-12" max="2030-04-12" required >
    		  <span class="validity"></span>
  			  
  			  <input type="number" min ="0" max="20" name ="note" required>
  			  <input type="submit" name = "validation'.$i.'" , value = "validation" required>
  			  </div>';}

 			if ($_POST['validation'.$i] == 'validation'){
			  	$data = $_POST['date'];
			  	$note =$_POST['note'];
			  	$id = $tab[$i][6];
			  			
				$resultat = $bdd->query("update Pratique 
										set Pratique.date_fin ='$data',
										Pratique.avis = $note
				                 where  Pratique.id_programme = $id 
				                  and Pratique.email_adherent = '$email';")
								or die('Erreur  date !<br>'.$sql3.'<br>'.mysqli_error());

					  	echo'merci !';}

			if ( $_POST['prog'.$i]=='En savoir plus')
		{
			$_SESSION['id'] = $tab[$i][6];
			$_SESSION['nom']= $tab[$i][1]; 
			$_SESSION['email'] = $email; 
			header('location:http://localhost/ProjetBDD/Site/Exercice.php');
			exit;
		}


			 } 
 
 
         ?>
    </div>
</body>
</form>
</html>
