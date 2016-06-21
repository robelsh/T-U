<?php

	$tab = array();
	$fp = "projets/projet1/test/Money.java";
	 $output = shell_exec ("javac Money.java"); 
echo $output;
	 $output = exec("java Money.class",$tab); 
echo $output;
	 print_r($tab);

?>