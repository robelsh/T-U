<?php
//Connexion à la base de donnée.
		$user = "test";
		$passwd = "test";
		$dsn = 'mysql:host=localhost;dbname=projet';

		try
   		{
      			$instancePDO = new PDO($dsn, $user, $passwd);
			$instancePDO -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    		}

    		catch (PDOException $e) 
		{
      			echo 'Connexion échouée : '.$e->getMessage();
			echo '<br/>' ;
    		}

?>
