<?php require("lib/function.php"); ?>
<?php
	session_destroy();
	unset($_SESSION);
	yonlendir("login.php");
 ?>