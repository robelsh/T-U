<?php
	//Met à jour les informations d'un projet.
	include("../../bdd/bdd.php");
	$nomprojet = $_POST['value'];
	$id = $_POST['id'];
	$instancePDO->query("UPDATE projet SET NOM_PROJET = '$nomprojet' WHERE ID_PROJET = '$id'");
	
?>
