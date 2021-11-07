<?php
session_start();
if(!isset($_SESSION['logUser'])){
		setcookie(session_name(),'',time()-86400,'/');
		session_unset();
		session_destroy();
		header("location:login.php");

	} 
?>