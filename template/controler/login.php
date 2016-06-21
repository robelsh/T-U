<?php

//Autorite = 0 : pas de connection.
//Autorite = 1 : accès espace visiteur.
//Autorite = 2 : admin.
session_start ();
if(isset($_SESSION['auth']) && $_SESSION['auth'] == true ){
	
	echo '<div style="text-align:center;" class"center"><h1>ACCES DENIED</h1> </div>';	
}
else {
	include("../../bdd/bdd.php");
	if (isset($_POST['id']) ){
		$user = $_POST['id'];
		
		
		$req = $instancePDO->query("SELECT * FROM etudiant WHERE LOGIN_ETUDIANT = '$user'");
		


		while ($c = $req->fetch(PDO::FETCH_OBJ)) {
			
					
				//Permet de savoir si l'utilisateur est logé.
				$_SESSION['auth'] = true;
				//Permet de savoir les droits de l'utilisateur.
				$_SESSION['authority'] = 1;
				//Identité de l'utilisateur.
				$_SESSION['identity'] = $c->LOGIN_ETUDIANT;
				//Promo de l'utilisateur.
				$_SESSION['promo'] = "Etudiant";
				header ('location: ../../index.php?content=content'); 
				
			}
			
			

			
		
		
		$req = $instancePDO->query("SELECT * FROM enseignant WHERE LOGIN_ENSEIGNANT = '$user'");
		


		while ($d = $req->fetch(PDO::FETCH_OBJ)) {
			
				//Promo de l'utilisateur.
				$_SESSION['promo'] = "Enseignant";
				//Permet de savoir si l'utilisateur est logé.
				$_SESSION['auth'] = true;
				//Permet de savoir les droits de l'utilisateur.
				$_SESSION['authority'] = 2;
				//Identité de l'utilisateur.
				$_SESSION['identity'] = $d->LOGIN_ENSEIGNANT;
				
				//redirection.
				header ('location: ../../index.php?content=content'); 
			
			
			
			
			
			
		
	}
	}
}
?>
