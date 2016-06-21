<?php
	include("../../bdd/bdd.php");
	$idprojet = $_POST['value'];
	$test = array();
	$testid = array();
	$i = 0;
	$liste_projet = $instancePDO->query("SELECT * from projet WHERE projet.ID_PROJET = '$idprojet'");
	while ($c = $liste_projet->fetch(PDO::FETCH_OBJ)) {
		$nom_projet = $c->NOM_PROJET;
		
	}
	$liste_projet = $instancePDO->query("SELECT * from projet,test WHERE projet.ID_PROJET = '$idprojet' AND test.ID_PROJET = projet.ID_PROJET");
	while ($c = $liste_projet->fetch(PDO::FETCH_OBJ)) {
		$nom_projet = $c->NOM_PROJET;
		$test[$i] = $c->NOM_TEST;
		$testid[$i] = $c->ID_TEST;
		$i ++;
	}
	$taille = sizeof($test);

?>

<form>
<input  id="nomprojet" type="text" value="<?php echo $nom_projet; ?>"/>
<div class="rows">
<h4> Test existants </h4>  <div id="reload" onClick="refreshtest();" class="glyphicon glyphicon-repeat">
    </div>
<?php
for ($i = 0; $i < $taille; $i++){
	?>
    <br/>
    <div class="md-col-1" id="test">
    <div style="cursor:pointer;" onClick="sup_test(<?php echo $testid[$i]; ?>);"> X </div>
    
    <?php
	echo $test[$i]."
	</div>";	
    
}
?>
</div>

<input onClick="maj_projet();" class="btn btn nav btn-warning btn" value="Valider Modification" />
</form>
