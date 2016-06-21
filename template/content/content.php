<div id="portrait"> <br/>
  <h2> Passez votre écran en paysage ! </h2>
</div>
<div class="row profil"> <br/>
  <br/>
<?php
	// inclusion de la base de donnée
	include ("bdd/bdd.php");
	$login = $_SESSION['identity'];
	
	// requête de récupéré les informations de l'étudiant selon le login entré
	if( $_SESSION['authority'] == 1){
	 
			$req = $instancePDO->query("SELECT * FROM etudiant WHERE LOGIN_ETUDIANT = '$login'");
			
			while ($c = $req->fetch(PDO::FETCH_OBJ)) {
				$nom = $c->NOM_ETUDIANT;
				$prenom = $c->PRENOM_ETUDIANT;
				$mail = $c->MAIL_ETUDIANT;
			}
	}
	
	else {
	// requête de récupéré les informations de l'enseignant selon le login entré
		$req =  $instancePDO->query("SELECT * FROM enseignant WHERE LOGIN_ENSEIGNANT = '$login'");
			
			while ($c = $req->fetch(PDO::FETCH_OBJ)) {
				$nom = $c->NOM_ENSEIGNANT;
				$prenom = $c->PRENOM_ENSEIGNANT;
				$mail = $c->MAIL_ENSEIGNANT;
			}	
		
	}

?>
  <div class="col-md-4"></div>
  <div class="col-md-7"> <?php echo $nom." ".$prenom; ?> <br/>
    <?php 
		echo $_SESSION['promo'];
	

	?>
    <br/>
    email : <?php echo $mail; ?><br/>
    <br/>
  </div>
  <div  class="close_profil"> <img onClick="return_m();" id="retour" src="images/home.png" alt="home"/> <img onClick="up_profil();" id="retour"  src="images/down.png" alt="profilUp"/> <a href="template/controler/logout.php"> <img  id="retour" src="images/deco.png" alt="deco"/> </a> </div>
</div>

<div class="row nav" >
  <div onClick="tl(); " id="top-left" class="col-md-6 menu top active">
    <div id="content-tl">
      <h1>
        <p>Visualiser</p>
      </h1>
      <br/>
      <br/>
    </div>
  </div>
  
  <?php
	if ( $_SESSION['promo'] == "Etudiant"){

	?>
     <div onClick="tr();" id="top-right" class="col-md-6 menu top active">
    <div id="content-tr">
      <h1>
        <p>Tester Déposer un Programme</p>
      </h1>
      <br/>
      <br/>
    </div>
  </div>
</div>

<div class="row nav">

    <div   class="col-md-12 menu bottom "><br/>
    <br/>
   
      <h1>
        <p style="text-decoration:underline;">Espace Etudiant</p>
      </h1>
      <br/>
      <br/>
    
  </div>
</div>

<?php
	}
	if ( $_SESSION['promo'] == "Enseignant"){

?>
  <div onClick="tr();" id="top-right" class="col-md-6 menu top active">
    <div id="content-tr">
      <h1>
        <p>Tester un Programme</p>
      </h1>
      <br/>
      <br/>
    </div>
  </div>
</div>
<div class="row nav">
  <div onClick="bl();" id="bottom-left" class="col-md-6 menu bottom active"><br/>
    <br/>
    <div id="content-bl" class="content">
      <h1>
        <p>Supprimer / Modifier Projet</p>
      </h1>
      <br/>
      <br/>
    </div>
  </div>
  <div onClick="br();" id="bottom-right" class="col-md-6 menu bottom active"><br/>
    <br/>
    <div id="content-br">
      <h1>
        <p> Nouveau Projet</p>
      </h1>
      <br/>
      <br/>
    </div>
  </div>
</div>
<?php
	}

?>
