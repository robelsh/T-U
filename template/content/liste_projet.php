<meta charset="UTF-8">
<?php
	include("../../bdd/bdd.php");
	$liste_projet = $instancePDO->query("SELECT * from projet");
	
?>
<br/><br/>
<div class="container">
  <div class="col-md-4"></div>
  <div class="col-md-4 login">
	<form>
    <select size="1" name="projet" id="projet">
    <?php
	// affiche la liste des projets
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
    <input onClick="sup_projet();" class="btn btn nav btn-warning btn" value="supprimer" />
     <input onClick="modif_projet();" class="btn btn nav btn-warning btn" value="Modifier" />
    </form>

</div></div>
</div>

<div id="modif_test">
</div>
