<?php
	include("../../bdd/bdd.php");
	$idprojet = $_POST['idprojet'];
	$login = $_SESSION['identity'];
	

	$test = $instancePDO->query("SELECT * from test WHERE ID_PROJET = '$idprojet'");
	while ($c = $test->fetch(PDO::FETCH_OBJ)) {
		$nomtest = $c->NOM_TEST;
		$idtest = $c->ID_TEST;
		echo "Test de : ".$nomtest."  ";
		$soustest = $instancePDO->query("SELECT soustest.VALEUR, soustest.TYPE,sous_test_etudiant.LOGIN_ETUDIANT from soustest, sous_test_etudiant WHERE soustest.ID_PROJET = '$idprojet' AND sous_test_etudiant.LOGIN_ETUDIANT = '$login'");
		while ($d = $soustest->fetch(PDO::FETCH_OBJ)) {
			$nomsoustest = $d->TYPE;
			$valeur = $d->VALEUR;
			echo $nomsoustest." ".$valeur;	

	}

	}


	$projet = $instancePDO->query("SELECT * from projet WHERE ID_PROJET = '$idprojet'");
	while ($c = $projet->fetch(PDO::FETCH_OBJ)) {
		$nomprojet = $c->NOM_PROJET;

	}




	echo $idprojet;
	echo $idtest;
	echo $nomtest;
	echo $nomprojet;
echo $idprojet;	
?>
