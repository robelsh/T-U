<?php	
	include("header.php");
		
	session_start();
	if(isset($_GET['content']) ){
		if ( $_GET['content'] == "content" || $_GET['content'] == "login" || $_GET['content'] == "login_form" ){
			$content=$_GET['content'];
		}
		
		else {
			echo "<script type=\"text/javascript\"> alert(\"Ce n'est pas bien de faire ça.\");</script>";
			$content = "home";	
		}
	}
	else {
		$content = "login_form";	
	}
	
	if(isset($_SESSION['auth']) && $_SESSION['auth'] == true ){
			$content = "content";
	}
	
	$content = 'content/'.$content.".php";

	include ($content);
	
	include("footer.php");
?>
