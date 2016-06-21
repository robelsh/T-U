<?php
	include("../../bdd/bdd.php");
	$nom_projet = $_POST['nom_projet'];
	
	$select_id = $instancePDO->query("SELECT * from projet");

	while ($p = $select_id->fetch(PDO::FETCH_OBJ)) {
			$id = $p->ID_PROJET;
			echo "<script> console.log(\"".$id."\");</script>";
		} 
	
	$id +=1;
	
	//Création d'un nouveau projet en Base de Donnée
	$instancePDO->query("INSERT INTO projet (NOM_PROJET) VALUES('$nom_projet')"); 
	
	//création des dossiers pour le nouveau projet:
	//Dossier du projet
	mkdir("../../projets/projet".$id,0700);
	
	//Dossier du java de test
	mkdir("../../projets/projet".$id."/test",0700);
	
	$fichier = "../../projets/projet".$id."/test/".$_FILES["myfile"]["name"];;
	
	if (isset($_FILES["myfile"])) { 
   	 	if ($_FILES["myfile"]["error"] > 0) {
    	    echo "Error: " . $_FILES["file"]["error"] . "<br>";
   	 	} else {
		
		//déplace le fichier dans le répertoire adéquat.
        move_uploaded_file($_FILES["myfile"]["tmp_name"], $fichier);
        
        print_r($_POST);
        print_r($_FILES);
    }
	exec("sudo chmod 777 ../../projets/*");
	exec("sudo chmod 777 ../../projets".$id."/*");
	echo "<script> alert(\"Nouveau Projet ajouté avec succès.\"); </script>";
}
?>
