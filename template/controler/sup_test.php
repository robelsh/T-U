<?php

	//Suppression d'un test selectionné.
	
	include("../../bdd/bdd.php");
	$idtest = $_POST['value'];
	$instancePDO->query("DELETE FROM sous_test_etudiant WHERE ID_TEST = '$idtest'");
	$instancePDO->query("DELETE FROM soustest WHERE ID_TEST = '$idtest'");
	$instancePDO->query("DELETE FROM test WHERE ID_TEST = '$idtest'");
	
?>
