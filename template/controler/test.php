<?php

include("../../config/config.php");
include("../../bdd/bdd.php");
session_start();
     //upload de fichier
     $filename = "../../projets/projet".$_POST['projet']."/".$_SESSION['identity'];
    if( file_exists ($filename ) == false){
        mkdir($filename, 0700);
	exec("chmod 777 ".$filename);
    }

$fichier = "../../projets/projet".$_POST['projet']."/".$_SESSION['identity']."/".$_FILES["myfile"]["name"];
if (isset($_FILES["myfile"])) { // it is recommended to check file type and size here
    if ($_FILES["myfile"]["error"] > 0) {
        echo "Error: " . $_FILES["file"]["error"] . "<br>";
    } else {

        move_uploaded_file($_FILES["myfile"]["tmp_name"], $fichier);
    }
}

exec("chmod 777 ".$root."/projets/projet".$_POST['projet']."/".$_SESSION['identity']."/*");

//Compilation du java
exec("javac -classpath \"../../projets/classpath/junit-4.11.jar\" \"../../projets/projet".$_POST['projet']."/".$_SESSION['identity']."/".$_FILES["myfile"]["name"]."\" ../../projets/projet".$_POST['projet']."/test/TestJunit.java ../../projets/projet".$_POST['projet']."/test/Principale.java", $output, $resultCode);


exec("chmod 777 ".$root."/projets/projet".$_POST['projet']."/".$_SESSION['identity']."/*");
exec("chmod 777 ".$root."/projets/projet".$_POST['projet']."/test/*");

//Execution java
exec ("java -cp ".$root."/projets/classpath/junit-4.11.jar:".$root."/projets/classpath/hamcrest-core-1.3.jar:".$root."/projets/projet".$_POST['projet']."/".$_SESSION['identity'].":".$root."/projets/projet".$_POST['projet']."/test Principale", $output);

//récupération des données renvoyé par le Java.
$array = array();
$idprojet = $_POST['projet'];
$login = $_SESSION['identity'];
$i = 0;
  
  while ($i != 7 ){


  $array[$i] = explode( ":", $output[$i],2);
  $methode[$i] = $array[$i][0];
  $resultat[$i] = $array[$i][1];
echo $$resultat[$i];
  if ($resultat[$i] == " No Error"){
  $note = 1;
}

else {
	$note = 0;
}
//Insertion des nom des méthodes testées dans la base de donnée.
  $instancePDO->query("INSERT INTO test (ID_PROJET,NOM_TEST) VALUES ('$idprojet','$methode[$i]')");

  $idtest = $instancePDO->query("SELECT ID_TEST FROM test WHERE ID_PROJET = '$idprojet' AND NOM_TEST = '$methode[$i]'"); 
	while ($c = $idtest->fetch(PDO::FETCH_OBJ)) {
		$test = $c->ID_TEST;


	
}

//Insertion des résultats des test de chaques méthodes dans la base de donnée.
$instancePDO->query("INSERT INTO sous_test_etudiant (ID_PROJET,ID_TEST,LOGIN_ETUDIANT,ID_SOUSTEST) VALUES ('$idprojet','$test','$login','$i')");
?>
<br/>
<div class="row">
<div class="md-col-3">
	<p> Test de : <?php echo $methode[$i]; ?> </p> 
</div>
<div <?php if ($resultat[$i] == " No Error" ){
	?>
	style="color:green;"
<?php
	
}
else {
?>
style="color:red;"
<?php
}
?> class="md-col-3">
Résulat : <?php  if($_SESSION['promo'] == "Enseignant") {
echo $resultat[$i]."<br/>"; 
}

else {
	if ($resultat[$i] != " No Error" ){
		echo "Error <br/>";
	}

	else {
		echo $resultat[$i]."<br/>";
	}
}
?>

</div>
<br/>
</div>
<?php
  $instancePDO->query("INSERT INTO soustest (ID_PROJET,ID_TEST,TYPE,VALEUR,ID_SOUSTEST) VALUES ('$idprojet','$test','$resultat[$i]','$note','$i')");
  $i ++;

  
}


	

?>
