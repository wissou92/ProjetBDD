<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>
		Programmes Sportifs
	</title>
	
	<link rel="stylesheet" type="text/css"  href="style_accueil.css">

</head>

<body>
	
 
 <?php 
   session_start();
       try{    
	$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs'); $bdd->set_charset("utf8");
	
$resultat = $bdd -> query ("select nom ,prenom from Adherant where Adherant.email = '$_SESSION[email]' ");
		echo mysqli_num_rows($resultat).'<br></br>'.$_SESSION[email].'<br>';
		
		
		echo $row  =  $resultat -> fetch_row()  ;
			 $row  =  $result -> fetch_array(MYSQLI_NUM);
			 printf ("\n  bienvenue : %s  %s \n" , $row[0] , $row[1]);  
		    
        
}

catch (Exception $e)
{   
	die('Erreur : ' . $e->getMessage());
}
     
 ?> 

</body>
</html>
