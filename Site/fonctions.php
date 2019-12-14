
<?php 
  
  function connect(){

try{
$bdd = new mysqli('localhost', 'root', 'user', 'Programmes_Sportifs');
		$bdd->set_charset("utf8");
	}catch (Exception $e){   die('Erreur : ' . $e->getMessage()); }

}

?> 