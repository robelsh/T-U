<?php

	//SUppression d'un projet selectionné.
	include("../../bdd/bdd.php");
	
	$projet = $_POST['value'];
	
	$instancePDO->query("DELETE from soustest WHERE ID_PROJET = '$projet'");
	$instancePDO->query("DELETE from sous_test_etudiant WHERE ID_PROJET = '$projet'");
	$instancePDO->query("DELETE from test WHERE ID_PROJET = '$projet'");
	$instancePDO->query("DELETE from projet WHERE ID_PROJET = '$projet'");

?>
