<!-- Login : User & Admin -->
<?php
if(isset($_SESSION['auth']) && $_SESSION['auth'] == true ){
	
	echo '<div style="text-align:center;" class"center"><h1>ACCES DENIED <br/> Déjà connecté</h1> </div>';	
}
else {
?>

<div class="center row">
  <div class="container">
<br/><br/>

  <div class="col-md-4"></div>
  <div class="col-md-4 login">
   <form id = "form_test" action="template/controler/ajout_projet.php" method="post" enctype="multipart/form-data">

      <br/>
      <br/>
      <div class="form-group">
        <h2> Nom du Projet : </h2>
        <br/>
        <input type="text" class="form-control" name="nom_projet" required>
      </div>

     
      <br/>
      <br/>
          	<h2>Ajoutez le programme de test :</h2><br/>
           <input type="file" name="myfile"> <br/>
          <input type="submit" value="Upload"><br/><br/>

         <div class="progress">
        <div class="bar"></div >
        <div class="percent">0%</div >        
         <div id="status"></div>         
    </div>
    <!-- <input id="submit" class="btn btn btn-success btn" value="Crééer Nouveau Projet"/>-->
</div>

   <script>
        (function() {
 
            var bar = $('.bar');
            var percent = $('.percent');
            var status = $('#status');
 
            $('form').ajaxForm({
                beforeSend: function() {
                    status.empty();
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                success: function() {
                    var percentVal = '100%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    status.html(xhr.responseText);
                }
            });
        })();
    </script>
    
    
    </form>
  </div>

 </div><br/><br/>
</div>
<?php
}
?>
