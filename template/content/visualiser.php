<?php
	session_start();
	include("../../bdd/bdd.php");
	if($_SESSION['promo'] == "Etudiant") {
		$liste_projet = $instancePDO->query("SELECT projet.NOM_PROJET,projet.ID_PROJET , sous_test_etudiant.ID_SOUSTEST from projet, sous_test_etudiant WHERE projet.ID_PROJET = sous_test_etudiant.ID_PROJET");
	}
	
	else {
		$liste_projet = $instancePDO->query("SELECT * from projet");
	}
?>
<br/><br/><br/>
	<form>
    <select size="1" name="projet" id="projet">
    <?php
	while ($c = $liste_projet->fetch(PDO::FETCH_OBJ)) {
		$nom = $c->NOM_PROJET;
		echo '<option id="'.$nom.'" value="'.$c->ID_PROJET.'">
        '.$nom.'
    	</option>';
	}
	
	?>
    </select>
    <div id="reload" onClick="liste_projet();" class="glyphicon glyphicon-repeat">
    </div>
    <br/><br/>
    <input onClick="visualiser_programmes();" class="btn nav btn btn-warning btn" value="Choisir programme à Visualiser" >
    <?php 
	if($_SESSION['promo'] == "Enseignant") {
	?>
	<input onClick="visualiser_programmes();" class="btn nav btn btn-warning btn" value="Voir résultat de ce projet" >
    <?php 
	}
	?>
    </form>
   
