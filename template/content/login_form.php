<!-- Login : User & Admin -->
<?php

if(isset($_SESSION['auth']) && $_SESSION['auth'] == true ){
	
	echo '<div style="text-align:center;" class"center"><h1>ACCES DENIED <br/> Déjà connecté</h1> </div>';	
}
else {
?>
<div style="text-align:center">
	<img id="logo" src="images/logo_isen.png" alt="logo-isen" />
</div>


<div class="center row">
  <div class="container">
  <hr />	
<br/><br/>

  <div class="col-md-4"></div>
  <div class="col-md-4 login">
    <form id="form_log" role="form" method="post" action="template/controler/login.php">
      <br/>
      <br/>
      <div class="form-group">
        <h2> Login </h2>
        <br/>
        <input type="text" class="form-control" name="id" placeholder="Identifiant" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control" name="passwd" placeholder="Mot de Passe" required>
      </div>
      <button id="submit" type="submit" class="btn btn btn-success btn">Connection</button>
      <br/>
      <br/>
    </form>
  </div>
  
  <div id="resultat">
  
  </div>
 </div><br/><br/>
<div style="text-align:center">
	<img id="creator" src="images/creator.png" alt="logo-creator" />
</div>
</div>
<?php
}
?>
