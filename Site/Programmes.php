<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>
		Programmes Sportifs
	</title>
	
	<link rel="stylesheet" type="text/css"  href="Style_Programmes.css">
 






</head>
<form method="post" action="Programmes.php">

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
	 	           '<h3>'.$tab[$i][0].'</h3>
			        <p>Catégorie: '.$tab[$i][1].'</p><p>Prix: '.$tab[$i][2].'$</p>
			        <p>Difficulté: '.$tab[$i][4].'/20<p><p>'.$tab[$i][3].'</p></div>';
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
			  else{  echo 'vous avez deja ce Programme';}
			 
		}
		   
		}

       ?>


	

    
</form>
</body>

</html>
