<?php
	include("../../bdd/bdd.php");
	$liste_projet = $instancePDO->query("SELECT * from projet");
?>
<br/><br/><br/>
  <div class="col-md-4"></div>
  <div class="col-md-4 login">
<form id = "form_test" action="template/controler/test.php" method="post" enctype="multipart/form-data">
<br/>
  <select name="projet" id="projet_visu">
    <?php
	while ($c = $liste_projet->fetch(PDO::FETCH_OBJ)) {
		$nom = $c->NOM_PROJET;
		echo '<option id="'.$nom.'" value="'.$c->ID_PROJET.'">
        '.$nom.'
    	</option>';
	}
	
	?>
   
    <div id="reload" onClick="liste_projet();" class="glyphicon glyphicon-repeat">
    </div><br/><br/>
  </select>


           
            <br/><br/><input type="file" name="myfile"> <br/>
          <input type="submit" value="Upload"><br/><br/>

         <div class="progress">
        <div class="bar"></div>
        <div class="percent">0%</div>        
         <div id="status"></div>         
    </div>
    </form>
    
    <div id="Result"></div>   
</div></div>

   <script>
        (function() {
 
            var bar = $('.bar');
            var percent = $('.percent');
            var status = $('#Result');
 
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
			status.append(xhr);		 
					
                }
            });
        })();
    </script>
    
