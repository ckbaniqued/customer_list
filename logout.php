<?php
session_start();
if(isset($_COOKIE[session_name()])){

	//empty the cookie
	setcookie(session_name(),'',time()-86400,'/');
}
session_unset();

session_destroy();

header("Location:login.php");

  ?>
 