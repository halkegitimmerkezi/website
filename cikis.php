<?php require("lib/function.php"); ?>
<?php
	$_SESSION['k_bilgi']['on']=0;
	session_destroy();
	unset($_SESSION);
	yonlendir("index.php");
 ?>